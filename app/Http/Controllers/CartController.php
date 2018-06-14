<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Validation\Rule;
use App\Repositories\CartRepository;

class CartController extends Controller
{

    protected $cartRepository;
    public function __construct(CartRepository $cartRepository)
    {
        $this->cartRepository = $cartRepository;
    }

    public function index()
    {
        if ( ! session('cart.id') ) {
            return view( 'customer.cartnoitems' );
        }
        $productsWithQuantity = $this->cartRepository->getLineDetailsById( session('cart.id') );
        $cartTotal = $this->cartRepository->getCartTotalById( session('cart.id') );
        return view( 'customer.cart', compact('productsWithQuantity', 'cartTotal') );
    }

    public function store()
    {
    	// Validating that product has been sent, is a valid product and in stock
        request()->validate([
            'product' => [
                'required',
                Rule::exists('products', 'slug')->where(function ($query) {
                    $query->where('stock', '>', 0);
                }),
            ],
        ]);

        if ( ! session('cart.id') ) {
    		$cart = Cart::create([
    			'products' => request('product')
    		]);
    		session()->put('cart.id', $cart->id);
            session()->put('cart.count', 1);
    	} else {
            $cart = Cart::where( 'id', session('cart.id') )->get();
            $cart->each( function($cart) {
                    $cart->update( [ 'products' => $cart->products . ',' . request('product') ]);
            });
            session()->put('cart.count', session('cart.count') + 1);
        }
		return response( session('cart.count') )->cookie('skaters', session('cart.id'), 60);
    }
}
