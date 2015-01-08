@extends('layouts.main')

@section('content')
     <div class="products_tile_div_home">
        <h2>{{$category->name}} Products</h2>
         <hr>
        <div class="row">
        @foreach($products as $product)
            @include('layouts.product')
        @endforeach
        </div>
    </div>

@stop

@section('pagination')
    <section class="pagination">
        {{ $products->links()}}
    </section>
@stop

