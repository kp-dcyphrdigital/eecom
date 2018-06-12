<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Payments\Processor;
use Illuminate\Http\Request;

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
        $cartTotal = Cart::find( session('cart.id') )->getLineDetails()->sum('subtotal');
		return view( 'customer.payment', compact('clientToken', 'cartTotal') );
    }

    public function store()
    {
		$cartTotal = Cart::find( session('cart.id') )->getLineDetails()->sum('subtotal') . ".00";
		$this->processor->charge($cartTotal);
		request()->session()->flush();
		return view( 'customer.orderconfirmed' );
    }

}
