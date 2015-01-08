@extends('layouts.main')

@section('promo')
    @include('store.promo')
@stop

@section('content')
    
    <h2>New Products</h2>
    <div>
        @foreach($products as $product)
            @include('layouts.product')
        @endforeach
    </div>
@stop
