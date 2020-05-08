@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Orders
        </div>

        @foreach ($users as $user)
        <div>
            @if ($loop->first)
            <b>The first in the loop</b>
            @elseif ($loop->last)
            <b>The last in the loop</b>
            @endif

            <i>{{ $user['name'] }} - {{ $user['age'] }}</i>
        </div>
        @endforeach

    </div>
</div>
@endsection