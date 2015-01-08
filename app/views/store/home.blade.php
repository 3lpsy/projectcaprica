@extends('layouts.main')

@section('promo')
    @include('store.promo')
@stop

@section('content')
    <div class="products_tile_div_home">
        <h2>New Products</h2>

        @for($i = 0; $i < count($products); $i++)
            @include('layouts.homeproduct')
        @endfor
    </div>
@stop
