@extends('web.layouts.master')


@section('content')
    <h2>{{$post_key->title}}</h2>
    <small>Written on {{$post_key->created_at}}</small><br><br>
    <p>{{$post_key->body}}</p>
    <br>
    <a href="/posts/{{$post_key->id}}/edit" class="btn btn-outline-primary">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post_key->id], 
                    'method' => 'POST', 'class' => 'pull-right'])!!}<br>
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
    {!!Form::close()!!}
@endsection