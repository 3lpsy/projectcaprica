
<div class="col-sm-4 product_div">
    <a href="/store/product/{{$product->product_id}}">
    {{ HTML::image($product->image, $product->title, array('class' => '', 'width'=>'240', 'height'=>'127'))}}
    </a>
    <h3>
        <a href="/store/product/{{$product->product_id}}">
        {{$product->title}}
        </a>
    </h3>
    <p>{{$product->description}}</p>
    <h5>Availability: 
    <span class={{Availability::displayClass($product->stock)}}>
        {{Availability::display($product->stock)}}
    </span>
    </h5>

    @include('layouts.wishlistadd')

    {{Form::open(array('url'=>'store/wishlist/'.$product->id, 'method'=>'delete'))}}
        {{Form::submit('X', array('class'=>'submit_wishlist_btn btn btn-danger'))}}
        {{Form::close()}}
</div>