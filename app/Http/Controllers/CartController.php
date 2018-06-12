<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CartController extends Controller
{
    public function store()
    {
    	// Validating that product has been sent, is a valid product and in stock
        request()->validate([
            'products' => [
                'required',
                function($attribute, $value, $fail) {
                    if ( \App\Models\Product::where('slug', $value)->where('stock', '>', 0)->get()->isEmpty() ) {
                        return $fail($attribute.' is invalid.');
                    }
                },
            ],
        ]);

        if ( ! session('cart.id') ) {
    		$cart = Cart::create([
    			'products' => request('products')
    		]);
    		session()->put('cart.id', $cart->id);
            session()->put('cart.count', 1);
    	} else {
            $cart = Cart::where( 'id', session('cart.id') )->get();
            $cart->each( function($cart) {
                    $cart->update( [ 'products' => $cart->products . ',' . request('products') ]);
            });
            session()->put('cart.count', session('cart.count') + 1);
        }
		return response( session('cart.count') )->cookie('skaters', session('cart.id'), 60);
    }
}
