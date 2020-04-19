@extends('masterTest')

@section('content')

    <div>
    <table>
        <tr>
            <th>Forename</th>
            <th>Lastname</th>
            <th>Edit</th>
            <th>Delete</th>   
        </tr>
       
        @foreach($students as $student)
        <tr>
            <th>{{ $student['Forename'] }}</th> <!---print the value "Forename" of array "$student" using {{}}--->
            <th>{{ $student['Lastname'] }}</th>
        </tr>
        @endforeach
        
    </table>
    </div>

@endsection