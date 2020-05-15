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
        <label for="price">Choose site price</label>
        <select name="price" id="price">
            <option value="7000">7000</option>
            <option value="11000">11000</option>
            <option value="15000">15000</option>
        </select>
        <fieldset>
            <label>Comment:</label> <br>
            <input type="checkbox" name="comment[]" value="OOP">OOP <br>
            <input type="checkbox" name="comment[]" value="Functional style">Functional style <br>
            <input type="checkbox" name="comment[]" value="frameworks">Frameworks <br>
            <input type="checkbox" name="comment[]" value="Pythod: Django">Python: Django <br>
            <input type="checkbox" name="comment[]" value="Bootstrap">Bootstrap <br>
        </fieldset>
        <input type="submit" value="order">   
    </form>
</div>
@endsection