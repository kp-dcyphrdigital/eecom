<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store()
    {
		session()->put('cart.count', session('cart.count') + 1);
		return session('cart.count');
    }
}
