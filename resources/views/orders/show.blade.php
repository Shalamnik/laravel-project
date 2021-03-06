@extends('layouts.app')

@section('content')
<div class="wrapper order-work">
    <h1>Order for {{ $order->customer_name }}</h1>
    <p class="type">type - {{ $order->type }}</p>
    <p class="stack">stack: {{ $order->stack }}</p>
    <p class="price">price: {{ $order->price }}</p>
    <p class="comment">Extra comment:</p>
    <ul>
        @foreach ($order->comment as $comment)
            <li>
                {{ $comment }}
            </li>
        @endforeach
    </ul>
<form action="{{ route('orders.destroy', $order->id)}}" method="POST">
        @csrf
        @method('DELETE');
        <input type="submit" value="Complete the order">
    </form> <br>
</div>
<a href="/orders" class="back"><- Back to all orders</a>
@endsection