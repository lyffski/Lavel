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
    @if(\Session::has('success'))
        <div>{{ \Session::get('success')}}</div>
    @endif
    <form method="post" action="{{url('test')}}">
    {{ csrf_field() }}
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