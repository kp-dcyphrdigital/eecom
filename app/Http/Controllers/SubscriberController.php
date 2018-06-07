<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Subscriber $subscriber)
    {
    	request()->validate(['email' => 'required|email|unique:subscribers']);
    	$subscriber->create(['email' => request('email')]);
    	return back();
    }
}
