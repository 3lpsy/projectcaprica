@extends('layouts.main')

@section('content')

<div class="products_tile_div_home">
    <h1>Wish list</h1>
    <h2 class="cont_shopping">&larr; {{HTML::link('/', 'Continue Shopping')}}</h2>
<div>
    @foreach($products as $product)
       @include('layouts.wishproduct')    
        @endforeach
</div>

@stop