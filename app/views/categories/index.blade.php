@extends('layouts.main')

@section('content')
    <div>
        <h1>Categories Admin Panel</h1>
        <hr>
        <p>Here you can view, delete and create new categories</p>

        <h2>Categories</h2>

        <ul>
            @foreach($categories as $category)
            <li>
                {{$category->name}} -
                {{Form::open(array('url' => 'admin/categories/'. $category->id , 'method' =>'delete' ))}}
                {{Form::hidden('id', $category->id)}}
                {{Form::submit('delete')}}
                {{Form::close()}}
            </li>
            @endforeach
        </ul>

        <h2> Create New Category</h2>
    <hr>
    @if ($errors->has())
        <div>
            <p>The following errors have occurred</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{Form::open(array('url'=> 'admin/categories/create', 'method'=>'get'))}}
    <p>
        {{Form::label('name') }}
        {{Form::text('name') }}
    </p>
    {{ Form::submit('Create Category', array('class'=>'')) }}
    {{ Form::close() }}
    </div>
@stop