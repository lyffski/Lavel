@extends('web.layouts.master')


@section('content')
<h2>Create Post</h2>
{!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!} <!---instead of action is also possible to write--->
    <div class="form-group">     <!--- ulr that will route to the route and there given further instruction--->
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
