@extends('layouts.main')

@section('search')
    <hr>
    <section>
        <h1>Search Results for "<span>{{$keyword}}</span>"</h1>
    </section>
@stop

@section('content')
<div>
    @foreach($products as $product)
       @include('layouts.product')
    @endforeach
</div>

@stop