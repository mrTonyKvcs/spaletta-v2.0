<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use SimplePay\SimplePayStart;
use SimplePay\SimplePayBack;
use SimplePay\SimplePayFinish;

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
		$trx->addData('total', $data['total']);


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
		
		Ticket::find($data['ticket_id'])
			->update([
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
			$result['originalTotal'] = Ticket::where('transaction_id', $result['t'])
				->first()
				->total;

			return redirect()->route('payment.finish', $result);
		} else {
			return 'refund';
		}


		if (count($result) > 0) {
			// QUERY
			print '<a href="query.php?orderRef=' . $result['o'] . '&transactionId=' . $result['t'] . '&merchant=' . $result['m'] . '"> QUERY: ' . $result['t'] . '</a>';
			print "<br/><br/>";

			// REFUND
			print '<a href="refund.php?orderRef=' . $result['o'] . '&transactionId=' . $result['t'] . '&merchant=' . $result['m'] . '"> REFUND 5 HUF</a>';
			print "<br/><br/>";

			print "Kétlépcsős tranzakció lezárása esetén<br/><br/>";
			// FINISH FULL
			print '<a href="finish.php?orderRef=' . $result['o'] . '&transactionId=' . $result['t'] . '&merchant=' . $result['m'] . '&originalTotal=25&approveTotal=25"> FINISH 25 HUF (terhelés teljes összeggel)</a>';
			print "<br/><br/>";
		}
	}

	public function finish(Request $request)
	{
		$trx = new SimplePayFinish();

		$trx->addConfig($this->config);

		//add merchant transaction ID
		//-----------------------------------------------------------------------------------------
		if (isset($_REQUEST['o'])) {
			$trx->addData('orderRef', $_REQUEST['o']);
		}


		//add SimplePay transaction ID
		//-----------------------------------------------------------------------------------------
		if (isset($_REQUEST['t'])) {
			$trx->addData('transactionId', $_REQUEST['t']);
		}


		//add merchant account ID
		//-----------------------------------------------------------------------------------------
		if (isset($_REQUEST['m'])) {
			$trx->addConfigData('merchantAccount', $_REQUEST['m']);
		}


		//add original total amount
		//-----------------------------------------------------------------------------------------
		if (isset($_REQUEST['originalTotal'])) {
			$trx->addData('originalTotal', $_REQUEST['originalTotal']);
		}


		//add approved total amount
		//-----------------------------------------------------------------------------------------
		if (isset($_REQUEST['approveTotal'])) {
			$trx->addData('approveTotal', $_REQUEST['originalTotal']);
		}


		//add currency
		//-----------------------------------------------------------------------------------------
		$trx->transactionBase['currency'] = 'HUF';


		//start finish
		//-----------------------------------------------------------------------------------------
		$trx->runFinish();


		//test data
		//-----------------------------------------------------------------------------------------
		print "API REQUEST";
		print "<pre>";
		print_r($trx->getTransactionBase());
		print "</pre>";

		print "API RESULT";
		print "<pre>";
		print_r($trx->getReturnData());
		print "</pre>";
	}
}
