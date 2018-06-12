@extends('customer.layouts.master')

@section('content')
<section class="product-container">
  <ul>
    @foreach($productsWithQuantity as $cartItem)
      <li>{{ $cartItem['name'] }} - {{ $cartItem['quantity'] }} - {{ $cartItem['price'] }} - {{ $cartItem['subtotal'] }}</li>
    @endforeach
  </ul>
  <h3>{{ $cartTotal }}</h3>
  <form action="/payment">
      <button type="submit" class="btn">pay now</button>
</form>

</section>

@endsection