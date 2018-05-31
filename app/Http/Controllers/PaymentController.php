<?php

namespace App\Http\Controllers;

use Braintree\Gateway as PaymentGateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function create(PaymentGateway $paymentgateway)
    {
		$clientToken = $paymentgateway->clientToken()->generate();
		return view( 'customer.payment', compact('clientToken') );
    }

    public function store(PaymentGateway $paymentgateway)
    {
		$result = $paymentgateway->transaction()->sale([
		  'amount' => '222.00',
		  'paymentMethodNonce' => request('payment_method_nonce'),
		  'options' => [
		    'submitForSettlement' => True
		  ]
		]);

		if ($result->success) {
			return view( 'customer.orderconfirmed' );
		} else {
			return "ERROR!";
		}
    }

}
