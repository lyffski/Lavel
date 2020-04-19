@extends('masterTest')

@section('content')

    <div>
        @if(\Session::has('success')) <!---if session has a key or var 'success' the code below will be compile---> 
            <div>{{ \Session::get('success')}}</div>
        @endif
    <div>
        <a href="{{route('test.create')}}"><button>Add</button></a> <!--href="test/create" do the same!!!--->
    </div> 
    <table>
        <tr>
            <th>Forename</th>
            <th>Lastname</th>
            <th>Edit</th>
            <th>Delete</th>   
        </tr>
       
        @foreach($students_obj0 as $student) <!---so basically you all the students or students_obj are the obj of the model you working with remember so do not get lost with this var OK?--->
        <tr>
            <th>{{ $student['Forename'] }}</th> <!---print the value "Forename" of array "$student"--->
            <th>{{ $student['Lastname'] }}</th> <!---------------------------------------------------------->
            <th><a href="{{action('Student_controller@edit', $student['id'])}}"><button>edit</button></a></th>
            <th>
                <form method="post" action="{{action('Student_controller@destroy', $student['id'])}}", >
                {{csrf_field()}} 
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit">delete</button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
    </div>

@endsection