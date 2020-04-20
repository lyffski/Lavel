@extends('web.layouts.master')

@section('content')
   <h1>Posts</h1>
    @if(count($posts_key)>0)
        @foreach($posts_key as $post)   <!---here $posts_key treated as var when in ctr as string REMEMBER THIS--->
        <div>
            <h3>{{ $post->title }}</h3>     
        </div>
        @endforeach
    @endif
@endsection