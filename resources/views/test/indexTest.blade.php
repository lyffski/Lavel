@extends('masterTest')

@section('content')

    <div>
    <div>
        <a href="{{route('test.create')}}">Add</a> <!--href="test/create" do the same!!!--->
    </div> 
    <table>
        <tr>
            <th>Forename</th>
            <th>Lastname</th>
            <th>Edit</th>
            <th>Delete</th>   
        </tr>
       
        @foreach($students as $student)
        <tr>
            <th>{{ $student['Forename'] }}</th> <!---print the value "Forename" of array "$student" using brackets--->
            <th>{{ $student['Lastname'] }}</th> <!---------------------------------------------------------->
            <th><a href="{{action('Student_controller@edit', $student['id'])}}">edit</a></th>
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