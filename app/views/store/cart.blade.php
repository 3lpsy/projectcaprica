@extends('layouts.main')

@section('content')

<div>
    <h1>Shopping Cart</h1>
    @foreach($products as $product)
        <h2>{{$product->name}}</h2>
        <p>
            {{HTML::image($product->image, $product->name)}}</p>
        <p>
        Product ID: {{$product->id}}
        </p>
        <p></p>
        Quantity: {{$product->quantity}}</p>
        <p>
            Price: ${{$product->price}}
            {{Form::open(array('url'=>'store/cart/'.$product->identifier, 'method'=>'delete'))}}
            Remove: {{Form::submit('X')}}
            {{Form::close()}}
        </p>
    @endforeach
        <p>
            Subtotal: ${{Cart::total()}}
        </p>
        {{Form::open(array('url'=>'https://www.paypal.com/cgi-bin/webscr', 'method'=>'post'))}}
        {{Form::hidden('cmd', '_xclick')}}
        {{Form::hidden('business', 'bussess@email.com')}}
        {{Form::hidden('item_name', 'Project Caprica Purchas')}}
        {{Form::hidden('amount', Cart::total())}}
        {{Form::hidden('first_name', Auth::user()->username)}}
        {{Form::hidden('last_name', Auth::user()->username)}}
        {{Form::hidden('email', Auth::user()->email)}}
        {{HTML::link('/', 'Continue Shopping')}}
    {{Form::submit('Checkout')}}
    {{Form::close()}}
</div>
@stop