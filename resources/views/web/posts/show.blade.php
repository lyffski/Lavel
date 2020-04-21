@extends('web.layouts.master')

@section('content')
    <h2>{{$post_key->title}}</h2>
    <small>Written on {{$post_key->created_at}}</small><br><br>
    <p>{{$post_key->body}}</p>
@endsection