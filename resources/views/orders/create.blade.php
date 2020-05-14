@extends('layouts.layout')

@section('content')
<div class="wrapper create-order">
    <h1>Create a new order</h1>
    <form action="/orders" method="POST">
        @csrf
        <label for="name">Your name</label>
        <input type="text" id="name" name="name">
        
        <label for="type">Choose site type</label>
        <select name="type" id="type">
            <option value="blog">Blog</option>
            <option value="landing">Langing</option>
            <option value="portal">Portal</option>
        </select>

        <label for="stack">Choose site stack</label>
        <select name="stack" id="stack">
            <option value="HTML, CSS, JS">HTML, CSS, JS</option>
            <option value="JS, React, Node.js">JS, React, Node.js</option>
            <option value="JS, PHP, MySQL">JS, PHP, MySQL</option>
        </select>
        <input type="submit" value="order">   
    </form>
</div>
@endsection