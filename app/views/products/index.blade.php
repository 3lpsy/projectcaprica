@extends('layouts.main')

@section('content')
    <div id="admin">
        <h1>Categories Admin Panel</h1>
        <hr>
        <p>Here you can view, delete and create new products</p>

        <h2>Products</h2>

        <ul>
            @foreach($products as $product)
            <li>
                {{HTML::image($product->image, 'Alt Text', array('width'=>'50px'))}} 
                {{$product->title}} -
                {{Form::open(array('url'=> 'admin/products/'.$product->id, 'method'=>'delete'))}}
                {{Form::hidden('id', $product->id)}}
                {{Form::submit('delete')}}
                {{Form::close()}} - 

                {{Form::open(array('url' => 'togglestock', 'method'=>'post', 'class' => 'form-inline'))}}
                {{Form::hidden('id', $product->id)}}
                {{Form::select('availability', array('1'=> 'In Stock', '0' => 'Out of Stock'), $product->availability)}}
                {{Form::submit("Update")}}
                {{Form::close()}}
            </li>
            @endforeach
        </ul>

        <h2> Create New Product</h2>
    <hr>
    @if ($errors->has())
        <div id="form-errors">
            <p>The following errors have occurred</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{Form::open(array('url'=> 'addproduct', 'method'=>'post', 'files'=>true))}}
    <p>
        {{Form::label('category_id', 'Category') }}
        {{Form::select('category_id', $categories) }}
    </p>
     <p>
        {{Form::label('title') }}
        {{Form::text('title') }}
    </p>
     <p>
        {{Form::label('description') }}
        {{Form::textarea('description') }}
    </p>
     <p>
        {{Form::label('price') }}
        {{Form::text('price', null, array('class'=>'form-price'))}}
    </p>
    <p>
        {{Form::label('image', 'Choose an image') }}
        {{Form::file('image')}}
    </p>
        {{ Form::submit('Create Product', array('class'=>'')) }}
        {{ Form::close() }}
    </div>
@stop