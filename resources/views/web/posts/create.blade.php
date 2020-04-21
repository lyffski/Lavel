@extends('web/layouts/master')

@section('content')
<h2>Create Post</h2>
{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div>
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div><br><br>
        {{Form::submit('Submit', ['class'=>'btn btn-outline-success'])}}
{!! Form::close() !!}

@endsection
