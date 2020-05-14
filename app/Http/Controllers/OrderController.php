<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        // $orders = Order::orderBy('price', 'desc')->get();
        // $orders = Order::where('type', 'blog')->get();

        return view('orders.index', [
            'orders' => $orders,
        ]);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', ['order' => $order]);
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store()
    {
        $order = new Order();

        $order->customer_name = request('name');
        $order->type = request('type');
        $order->stack = request('stack');
        $order->price = 40000;

        $order->save();

        error_log($order);

        return redirect('/')->with('message', 'Thanks for your order');
    }
}
