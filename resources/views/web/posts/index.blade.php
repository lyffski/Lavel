@extends('web.layouts.master')

@section('content')
   <h1>Posts</h1>
    @if(count($posts_key)>0)
        @foreach($posts_key as $post)   <!---here $posts_key treated as var when in ctr as string REMEMBER THIS--->
        <div>
            <h4><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h4>
            <small>Written on {{$post->created_at}}</small>
            <p>{{ $post->body }}</p>     
        </div>
        @endforeach
    @else
    <h5>Post not found</h5>
    @endif
@endsection