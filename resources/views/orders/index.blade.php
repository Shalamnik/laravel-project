@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Orders list
        </div>

        @foreach ($orders as $order)
            <div>
                {{ $order->type }} - {{ $order->stack }}
                <p>Name: {{ $order->customer_name }}</p>
                <p>Price: {{ $order->price }}</p>
            </div>
            <hr>
        @endforeach
        <br>
        <a href="/">Go to index page</a>
    </div>
</div>
@endsection