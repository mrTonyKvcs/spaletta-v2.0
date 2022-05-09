<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Ticket;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log as FacadesLog;
use SimplePay\SimplePayStart;
use SimplePay\SimplePayBack;
use SimplePay\SimplePayFinish;
use SimplePay\SimplePayIpn;
use SzamlaAgent\Log;
use Throwable;

class PaymentController extends Controller
{
    protected $config;

    public function __construct()
    {
        $this->config = config('spaletta.simplepay');
    }

    public function start(Request $request)
    {
        $data = $request->all();
        $trx = new SimplePayStart();

        $currency = 'HUF';
        $trx->addData('currency', $currency);

        $trx->addConfig($this->config);
        $trx->addData('total', $data['price'] * $data['quantity']);


        $trx->addItems(
            array(
                'ref' => $data['order_number'],
                'title' => $data['event_name'],
                'desc' => $data['event_name'] . 'jegy',
                'amount' => $data['quantity'],
                'price' => $data['price'],
                // 'tax' => '27',
            )
        );

        $trx->addData('maySelectEmail', true);
        $trx->addData('maySelectInvoice', true);

        $trx->addData('orderRef', str_replace(array('.', ':', '/'), "", @$_SERVER['SERVER_ADDR']) . @date("U", time()) . rand(1000, 9999));


        $trx->addData('customer', $data['name']);

        $trx->addData('threeDSReqAuthMethod', '02');


        $trx->addData('customerEmail', $data['email']);


        $trx->addData('language', 'HU');


        if (isset($_REQUEST['twoStep'])) {
            $trx->addData('twoStep', true);
        }

        $timeoutInSec = 600;
        $timeout = @date("c", time() + $timeoutInSec);
        $trx->addData('timeout', $timeout);


        $trx->addData('methods', array('CARD'));


        $trx->addData('url', $this->config['URL']);

        // $trx->addGroupData('urls', 'success', $config['URLS_SUCCESS']);
        // $trx->addGroupData('urls', 'fail', $config['URLS_FAIL']);
        // $trx->addGroupData('urls', 'cancel', $config['URLS_CANCEL']);
        // $trx->addGroupData('urls', 'timeout', $config['URLS_TIMEOUT']);


        $trx->addGroupData('mobilApp', 'simpleAppBackUrl', 'myAppS01234://payment/123456789');


        $trx->addGroupData('invoice', 'name', $data['name']);
        // $trx->addGroupData('invoice', 'company', '');
        $trx->addGroupData('invoice', 'country', 'hu');
        // $trx->addGroupData('invoice', 'state', 'Budapest');
        $trx->addGroupData('invoice', 'city', $data['city']);
        $trx->addGroupData('invoice', 'zip', $data['zip']);
        $trx->addGroupData('invoice', 'address', $data['street']);
        // $trx->addGroupData('invoice', 'address2', 'Address 2');
        $trx->addGroupData('invoice', 'phone', $data['phone_number']);

        $trx->formDetails['element'] = 'button';

        $trx->runStart();

        $trx->getHtmlForm();
        
        $ticket = Ticket::find($data['ticket_id'])
            ->transaction()
            ->create([
                'status' => Status::START_PAYMENT,
                'transaction_id' => $trx->returnData['transactionId'],
                'order_ref' => $trx->returnData['orderRef']
            ]);

        return redirect()->to($trx->returnData['paymentUrl']);
    }

    public function back()
    {
        $trx = new SimplePayBack();

        $trx->addConfig($this->config);

        //result
        //-----------------------------------------------------------------------------------------
        $result = array();
        if (isset($_REQUEST['r']) && isset($_REQUEST['s'])) {
            if ($trx->isBackSignatureCheck($_REQUEST['r'], $_REQUEST['s'])) {
                $result = $trx->getRawNotification();
            }
        }

        if ($result['e'] === 'SUCCESS') {
            $payment = Transaction::query()
                ->where('transaction_id', $result['t'])
                ->where('order_ref', $result['o'])
                ->firstOrFail();
            
            $payment->update(['status' => Status::END_PAYMENT]);
            
            $ticket = $payment->model;

            return redirect()->route('pages.successful-payment', [$ticket->id, $ticket->order_number]);
        } else {
            $transaction = Transaction::query()
                ->where('transaction_id', $result['t'])
                ->where('order_ref', $result['o'])
                ->firstOrFail();

            switch ($result['e']) {
                case 'CANCEL':
                    $transaction->update(['status' => Status::CANCEL_PAYMENT]);
                    break;
                
                case 'FAIL':
                    $transaction->update(['status' => Status::FAIL_PAYMENT]);
                    break;

                case 'TIMEOUT':
                    $transaction->update(['status' => Status::TIMEOUT_PAYMENT]);
                    break;
            }

            return redirect()->route('pages.payment-error', $transaction->id);
        }
    }

    public function ipn(Request $request)
    {
        $json = $request->all();

        try {
            $json['receiveDate'] = now();
            $signature = base64_encode(hash_hmac('sha384', json_encode($json), trim('5yF2qxFf41MY4qC80Q2345Fw49jf9i3A'), true));

            return response($json, 200)
                ->header('Content-Type', 'application/json')
                ->header('Signature', $signature);
        } catch (Throwable $e) {
            FacadesLog::error($e);
            dd($e);
        }

        //no need to print further information
        exit;
    }
}
