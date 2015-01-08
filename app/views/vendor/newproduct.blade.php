@extends('layouts.main')

@section('content')
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

    <?php
        $categories = array();
        foreach(Category::all() as $category) 
            $categories[$category->id] = $category->name;
    ?>

    {{Form::open(array('url'=> 'addproduct', 'method'=>'post', 'files'=>true))}}
    <p>
        {{Form::label('category_id', 'Category') }}
        {{Form::select('category_id', $categories)}}
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