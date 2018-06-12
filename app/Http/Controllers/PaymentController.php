<?php

namespace App\Http\Controllers;

use App\Payments\Processor;
use Illuminate\Http\Request;
use App\Repositories\CartRepository;

class PaymentController extends Controller
{
    
    protected $processor, $cartTotal;
	public function __construct(Processor $processor, CartRepository $cartRepository)
	{
		$this->processor = $processor;
		$this->cartRepository = $cartRepository;
	}

    public function create()
    {
		return view( 'customer.payment', [
			'clientToken' => $this->processor->getToken(), 
			'cartTotal' => $this->cartRepository->getCartTotalById( session('cart.id') ),
		]);
    }

    public function store()
    {
		$this->processor->charge( $this->cartRepository->getCartTotalById( session('cart.id') ) );
		request()->session()->flush();
		return view( 'customer.orderconfirmed' );
    }

}
