<div class="">
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
    </h5>
    @include('layouts.add')
</div>