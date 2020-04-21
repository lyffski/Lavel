@extends('web/layouts/master')

@section('content')
<h2>Edit Post</h2>
{!! Form::open(['action' => ['PostsController@update', $post_key->id], 'method'=>'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post_key->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div>
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post_key->body, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div><br><br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-outline-success'])}}
{!! Form::close() !!}

@endsection
