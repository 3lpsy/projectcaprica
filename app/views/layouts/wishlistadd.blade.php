@if (Auth::check())
<p>
    <span class = "price"> ${{$product->price}}</span>
    {{Form::open(array('url'=>'store/cart'))}}
    {{Form::hidden('quantity', 1)}}    
    {{Form::hidden('id', $product->id)}}
    {{Form::submit('Add To Cart', array('class'=>'submit_cart_btn btn btn-success'))}}
    {{Form::close()}}
</p>
@else 
    {{HTML::link('users/auth', 'Sign In')}}
@endif

