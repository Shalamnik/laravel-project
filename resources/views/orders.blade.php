@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Orders list
        </div>

        <h3>Customer name: {{ $name }}</h3>
        <h4>Customer age: {{ $age }}</h4>

    </div>
</div>
@endsection