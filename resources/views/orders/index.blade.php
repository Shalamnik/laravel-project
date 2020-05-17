@extends('layouts.layout')

@section('content')
<div class="wrapper order-index">
    <h1>List of Orders</h1>
    @foreach($orders as $order)
      <div class="order-item">
        <h4><a href="/orders/{{ $order->id }}">{{ $order->type }}</a></h4>
      </div>
    @endforeach
  
  </div>
@endsection