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

        return view('orders', [
            'orders' => $orders,
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
