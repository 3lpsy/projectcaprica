
@if (Auth::check())
<p>
    <span class = "price"> ${{$product->price}}</span>
    {{Form::open(array('url'=>'store/cart'))}}
    {{Form::hidden('quantity', 1)}}    
    {{Form::hidden('id', $product->id)}}
    {{Form::submit('Add To Cart', array('class'=>'submit_cart_btn btn-success'))}}
    {{Form::close()}}

    {{Form::open(array('url'=>'store/wishlist'))}}
    {{Form::hidden('quantity', 1)}}    
    {{Form::hidden('id', $product->id)}}
    {{Form::submit('Add To Wishlist', array('class'=>'submit_wishlist_btn btn-primary'))}}
    {{Form::close()}}
</p>
@else 
    {{HTML::link('users/auth', 'Sign In')}}
@endif

