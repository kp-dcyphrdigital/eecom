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
        // Validating that sku that has been sent, is a valid and order qty is in stock
        request()->validate([
            'quantity' => 'integer|min:1',
            'sku' => [
                'required',
                Rule::exists('variants', 'sku')->where(function ($query) {
                    $query->where('stock', '>=', request('quantity'));
                }),
            ],
        ]);

        $cart = Cart::create([
            'cart_id' => 1,
            'sku' => request('sku'),
            'quantity' => request('quantity'),
         ]);

        $cartcount = Cart::where('cart_id', $cart->cart_id)->count(); 
        session()->put('cart.count', $cartcount);

        return response()->json([
            'success' => true,
            'cartid' => $cart->cart_id,
            'cartcount' => $cartcount,
        ]);

/*    	// Validating that product has been sent, is a valid product and in stock
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
		return response( session('cart.count') )->cookie('skaters', session('cart.id'), 60);*/
    }
}
