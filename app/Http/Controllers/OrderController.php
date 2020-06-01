<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['store, show']);
    }

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
        $order->price = request('price');
        $order->comment = request('comment');

        $order->save();

        return redirect('/')->with('message', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect('/orders');
    }
}
