@extends('layouts.main')

@section('content')
        
    <div class="products_tile_div_home">
        <h2 class="vendor_listing_name">{{Auth::user()->username}}'s Listings</h2>
        <h3><button class="btn btn-default btn_add_listing">{{HTML::link('vendor/products/'. Auth::id(). '/edit', 'Add Product', array('class'=>''))}}</button></h3>
        @foreach($products as $product)
            @include('layouts.vend')
        @endforeach
    </div>
@stop
