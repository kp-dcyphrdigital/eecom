<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\TransactionSearch;
use Braintree\Gateway as PaymentGateway;


class PaymentController extends Controller
{
    public function create(PaymentGateway $paymentgateway)
    {
		$clientToken = $paymentgateway->clientToken()->generate();
		return view( 'customer.payment', compact('clientToken') );
    }

    public function store(PaymentGateway $paymentgateway)
    {
		$amount = '222.00';
		$result = $paymentgateway->transaction()->sale([
		  'amount' => $amount,
		  'paymentMethodNonce' => request('payment_method_nonce'),
		  'options' => [
		    'submitForSettlement' => True
		  ]
		]);

		if ($result->success) {
			$transaction = $paymentgateway->transaction()->find($result->transaction->id);
			if ( $transaction->amount === $amount ) {
				return view( 'customer.orderconfirmed' );
			}
		}
		return "ERROR!";
    }

}
