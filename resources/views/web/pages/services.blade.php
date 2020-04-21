@extends('web.layouts.master')


@section('content')
    <h1>Services</h1>
    @if(count($services))
        <ul>
        @foreach($services as $service)
        <li>{{$service}}</li>
        @endforeach
        </ul>
    @endif

@endsection