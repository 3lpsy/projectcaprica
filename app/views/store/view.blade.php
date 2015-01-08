@extends('layouts.main')

@section('content')

    <div>
        <h1>{{$product->title}}</h1>
        <p>{{$product->description}}</p>
        <hr>

         @include('layouts.product')
        
    </div>
    <div>
        <p> ${{$product->price}}</p>
        <p>Availability: 
            <span class={{Availability::displayClass($product->availability)}}>
                {{Availability::display($product->availability)}}
            </span>
        </p>
        <p>Product Code: <span>{{$product->id}}</span></p>
    </div>

@stop