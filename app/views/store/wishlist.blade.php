@extends('layouts.main')

@section('content')

<div>
{{HTML::link('/', 'Continue Shopping')}}
    <h1>Wish list</h1>
<div>
    @foreach($products as $product)
       @include('layouts.product')
    @endforeach
</div>

@stop