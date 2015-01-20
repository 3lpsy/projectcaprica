@extends('layouts.main')

@section('content')
    <div class="products_tile_div_home">
        @if (Auth::id() == $vendor_id)
            <h2 class="vendor_listing_name">{{Auth::user()->username}}'s Listings</h2>
            <h3>
                <button class="btn btn-default btn_add_listing">
                    {{HTML::link('vendor/products/'. Auth::id(). '/edit', 'Add Product', array('class'=>''))}}
                </button>
            </h3>
        @else
        <h2 class="vendor_listing_name">{{User::find($vendor_id)->username}}'s Listings</h2>
        
        @endif
        @foreach($products as $product)
            @if (Auth::id() == $product->vendor_id)
                @include('layouts.vend')
            @else
                @include('layouts.product')
            @endif
        @endforeach
    </div>
@stop
