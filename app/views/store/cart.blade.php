@extends('layouts.main')

@section('content')
<div>
<h1>Shopping Cart</h1>
<h2 class="cont_shopping">&larr; {{HTML::link('/', 'Continue Shopping')}}</h2>
    @include('layouts.checkout')
    <div class="subtotal_checkout">
    <p>
        <span> Subtotal: </span>${{Cart::total()}}
    </p>
    {{Form::open(array('url'=>'https://www.paypal.com/cgi-bin/webscr', 'method'=>'post'))}}
    {{Form::hidden('cmd', '_xclick')}}
    {{Form::hidden('business', 'bussess@email.com')}}
    {{Form::hidden('item_name', 'Project Caprica Purchas')}}
    {{Form::hidden('amount', Cart::total())}}
    {{Form::hidden('first_name', Auth::user()->username)}}
    {{Form::hidden('last_name', Auth::user()->username)}}
    {{Form::hidden('email', Auth::user()->email)}}
    {{Form::submit('Checkout with Paypal', array('class'=>'btn btn-primary'))}}
    {{Form::close()}}
    {{Form::open(array('url'=>'checkout/bitcoin/', 'method'=>'post'))}}
    {{Form::hidden('cmd', '_xclick')}}
    {{Form::hidden('business', 'bussess@email.com')}}
    {{Form::hidden('item_name', 'Project Caprica Purchas')}}
    {{Form::hidden('amount', Cart::total())}}
    {{Form::hidden('first_name', Auth::user()->username)}}
    {{Form::hidden('last_name', Auth::user()->username)}}
    {{Form::hidden('email', Auth::user()->email)}}
    {{Form::submit('Checkout with Bitcoin', array('class'=>'btn btn-warning'))}}
    {{Form::close()}}
    </div>
</div>
@stop