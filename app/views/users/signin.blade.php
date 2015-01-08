@extends('layouts.main')

@section('content')
    <div>
        <h1>Sign In</h1>

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
            {{Form::label('email')}}
            {{Form::text('email')}}
        </p>
         <p>
            {{Form::label('password')}}
            {{Form::password('password')}}
        </p>
        {{Form::submit('Sign In')}}
        {{Form::close()}}
        <section>
            <h2>Create Account</h2> 
            {{HTML::link('users/auth/create', 'Create New Account')}}
        </section>
@stop