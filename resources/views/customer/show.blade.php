@extends('customer.layouts.master')

@section('content')
    <p>{{ $product->id }} - {{ $product->name }}</p>
@endsection