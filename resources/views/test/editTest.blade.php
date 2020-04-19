@extends('masterTest')

@section('content')
    <br>
        <h2>Edit Record</h2>
        <br>
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
        <form method="post" action="{{action('Student_controller@update', $id)}}">
        {{csrf_field()}}
        <div>
            <input type="hidden" name="_method" value="PATCH">
            <div>
            <input type="text" name="forename" value="{{$student_obj1->Forename}}"><!----------------------------------------->
            </div>
            <div>
            <input type="text" name="lastname" value="{{$student_obj1->Lastname}}"><!----------------------------------------->
            </div>
            <div>
            <input type="submit" value="edit">
            </div>
        </div>
        </form>
    </br>
@endsection