@extends('masterTest')

@section('content')
<div>
    <h3>Add Data</h3>
    @if(count($errors) > 0)     
        @foreach($errors->all() as $error)
            <ul>
                <li>{{ $error }}</li>
            </ul>
        @endforeach
    @endif
    @if(\Session::has('success')) <!---if session has a key or var 'success' the code below will be compile---> 
        <div>{{ \Session::get('success')}}</div>
    @endif
    <form method="post" action="{{url('test')}}">  <!---action set the url to "test" (wildcard, I guess) and will be provided--->
    {{ csrf_field() }}            <!---to the route and form there will be direct further into the app (check the controller)--->
    <div>
        <input type="text" name="forename" placeholder="Entry your Forename">
    </div>
    <div>
        <input type="text" name="lastname" placeholder="Entry your Lastname">   
    </div>
    <div>
        <input type="submit">
    </div>
</div>

@endsection