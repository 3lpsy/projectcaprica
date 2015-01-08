@extends('layouts.main')

@section('content')
    
    <h2>{{Auth::user()->username}}'s Listings</h2>
    <div>
        @foreach($products as $product)
            @include('layouts.product')
        @endforeach
    </div>
@stop
