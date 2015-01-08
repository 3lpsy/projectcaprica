
@if (Auth::check())
<p>
    <span>{{$product->price}}</span>
    {{Form::open(array('url'=>'store/cart'))}}
    {{Form::hidden('quantity', 1)}}    
    {{Form::hidden('id', $product->id)}}
    {{Form::submit('Add To Cart')}}
    {{Form::close()}}

    {{Form::open(array('url'=>'store/wishlist'))}}
    {{Form::hidden('quantity', 1)}}    
    {{Form::hidden('id', $product->id)}}
    {{Form::submit('Add To Wishlist')}}
    {{Form::close()}}
</p>

@endif

