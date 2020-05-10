<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $users = [
            ['name' => 'sergey', 'age' => 23],
            ['name' => 'vlad', 'age' => 22],
            ['name' => 'misha', 'age' => 22]
        ];

        return view('orders', [
            'users' => $users,
            'name' => request('name'),
            'age' => request('age')
        ]);
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
