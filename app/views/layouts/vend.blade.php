<div class="col-sm-4 product_div">
    <a href="/store/product/{{$product->id}}">
    {{ HTML::image($product->image, $product->title, array('class' => '', 'width'=>'240', 'height'=>'127'))}}
    </a>
    <h3>
        <a href="/store/product{{$product->id}}">
        {{$product->title}}
        </a>
    </h3>
    <p>{{$product->description}}</p>
    <h5>Availability: 
    <span class={{Availability::displayClass($product->availability)}}>
        {{Availability::display($product->availability)}}
    </span>
    {{Form::open(array('url'=>'vendor/products/'.$product->id, 'method'=>'delete'))}}
        {{Form::submit('X', array('class'=>'btn btn-danger'))}}
        {{Form::close()}}
    </h5>
</div>