<?php

namespace App\Payments;

class Processor
{
	protected $paymentgateway;
	public function __construct($paymentgateway)
	{
		$this->paymentgateway = $paymentgateway;
	}

	public function getToken()
	{
		return $this->paymentgateway->clientToken()->generate();
	}

	public function charge()
	{
		$amount = '231.00';
		$result = $this->paymentgateway->transaction()->sale([
		  'amount' => $amount,
		  'paymentMethodNonce' => request('payment_method_nonce'),
		  'options' => [
		    'submitForSettlement' => True
		  ]
		]);

		if ($result->success) {
			$transaction = $this->paymentgateway->transaction()->find($result->transaction->id);
			if ( $transaction->amount === $amount ) {
				return;
			}
		}
		abort(500);
	}

}