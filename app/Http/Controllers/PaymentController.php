<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payments\Processor;

class PaymentController extends Controller
{
    
    protected $processor;
	public function __construct(Processor $processor)
	{
		$this->processor = $processor;
	}

    public function create()
    {
		$clientToken = $this->processor->getToken();
		return view( 'customer.payment', compact('clientToken') );
    }

    public function store()
    {
		$this->processor->charge();
		return view( 'customer.orderconfirmed' );
    }

}
