@extends('layouts.main')

@section('content')
    <div>
        <h1>Create new Account</h1>

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
        </div>

        {{Form::open(array('url'=>'users/auth/signin', 'method'=>'post'))}}
        <p>
            {{Form::label('username')}}
            {{Form::text('username')}}
        </p>
          <p>
            {{Form::label('email')}}
            {{Form::text('email')}}
        </p>
         <p>
            {{Form::label('password')}}
            {{Form::password('password')}}
        </p>
         <p>
            {{Form::label('password_confirmation')}}
            {{Form::password('password_confirmation')}}
        </p>

        <p>
            {{Form::label('Type: ')}}
            {{ Form::select('size', array('0' => 'Buyer', '1' => 'Vendor'))}} 
      </p>

        {{Form::submit('Create new Account')}}

        {{Form::close()}}


@stop