<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimplePay\SimplePayStart;

class PaymentController extends Controller
{
	protected $config;

	public function __construct()
	{
		$this->config = config('spaletta.simplepay');
	}

	public function start()
	{
		$trx = new SimplePayStart();

		$currency = 'HUF';
		$trx->addData('currency', $currency);

		$trx->addConfig($this->config);
		$trx->addData('total', 25);


		$trx->addItems(
			array(
				'ref' => 'Product ID 1',
				'title' => 'Product name 1',
				'desc' => 'Product description 1',
				'amount' => '1',
				'price' => '5',
				'tax' => '0',
			)
		);

		$trx->addItems(
			array(
				'ref' => 'Product ID 2',
				'title' => 'Product name 2',
				'desc' => 'Product description 2',
				'amount' => '1',
				'price' => '2',
				'tax' => '0',
			)
		);


		// OPTIONAL DATA INPUT ON PAYMENT PAGE
		//-----------------------------------------------------------------------------------------
		$trx->addData('maySelectEmail', true);
		$trx->addData('maySelectInvoice', true);
		// $trx->addData('maySelectDelivery', ['HU']);


		// SHIPPING COST
		//-----------------------------------------------------------------------------------------
		$trx->addData('shippingCost', 20);


		// DISCOUNT
		//-----------------------------------------------------------------------------------------
		$trx->addData('discount', 10);


		// ORDER REFERENCE NUMBER
		// uniq oreder reference number in the merchant system
		//-----------------------------------------------------------------------------------------
		$trx->addData('orderRef', str_replace(array('.', ':', '/'), "", @$_SERVER['SERVER_ADDR']) . @date("U", time()) . rand(1000, 9999));


		$trx->addData('customer', 'v2 SimplePay Teszt');


		// customer's registration mehod
		// 01: guest
		// 02: registered
		// 05: third party
		//-----------------------------------------------------------------------------------------
		$trx->addData('threeDSReqAuthMethod', '02');


		$trx->addData('customerEmail', 'sdk_test@otpmobil.com');


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


		// Redirect from Simple app to merchant app
		//-----------------------------------------------------------------------------------------
		$trx->addGroupData('mobilApp', 'simpleAppBackUrl', 'myAppS01234://payment/123456789');


		$trx->addGroupData('invoice', 'name', 'SimplePay V2 Tester');
		$trx->addGroupData('invoice', 'company', '');
		$trx->addGroupData('invoice', 'country', 'hu');
		$trx->addGroupData('invoice', 'state', 'Budapest');
		$trx->addGroupData('invoice', 'city', 'Budapest');
		$trx->addGroupData('invoice', 'zip', '1111');
		$trx->addGroupData('invoice', 'address', 'Address 1');
		$trx->addGroupData('invoice', 'address2', 'Address 2');
		$trx->addGroupData('invoice', 'phone', '06201234567');


		// $trx->addGroupData('delivery', 'name', 'SimplePay V2 Tester');
		// $trx->addGroupData('delivery', 'company', '');
		// $trx->addGroupData('delivery', 'country', 'hu');
		// $trx->addGroupData('delivery', 'state', 'Budapest');
		// $trx->addGroupData('delivery', 'city', 'Budapest');
		// $trx->addGroupData('delivery', 'zip', '1111');
		// $trx->addGroupData('delivery', 'address', 'Address 1');
		// $trx->addGroupData('delivery', 'address2', '');
		// $trx->addGroupData('delivery', 'phone', '06203164978');

		//payment starter element
		// auto: (immediate redirect)
		// button: (default setting)
		// link: link to payment page
		//-----------------------------------------------------------------------------------------
		$trx->formDetails['element'] = 'button';

		$trx->runStart();

		$trx->getHtmlForm();

        return redirect()->to($trx->returnData['paymentUrl']);

		// print $trx->returnData['form'];

		// var_dump($trx->returnData['form']);
		// var_dump($trx->getTransactionBase());
		// var_dump($trx->getReturnData(), 200);
	}

	public function back()
	{
		dd('back');
	}
}
