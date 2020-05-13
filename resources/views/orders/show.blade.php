@extends('layouts.layout')

@section('content')
<div class="wrapper order-work">
    <h1>Order for {{ $order->customer_name }}</h1>
    <p class="type">type - {{ $order->type }}</p>
    <p class="stack">stack: {{ $order->stack }}</p>
    <p class="price">price: {{ $order->price }}</p>
</div>
<a href="/orders" class="back"><- Back to all orders</a>
@endsection