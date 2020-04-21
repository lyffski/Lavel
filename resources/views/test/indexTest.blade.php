@extends('web.layouts.master')

@section('content')
<h1>Student Table</h1>
    <div>
        @if(\Session::has('success')) <!---if session has a key or var 'success' the code below will be compile---> 
            <div>{{ \Session::get('success')}}</div>
        @endif
    <div>
        <!--href="test/create" do the same!!!--->
    </div> 
    <div class="card border-primary mb-3" >
    <table class="table table-hover">
        <tr class="table-black" style="border-bottom: solid 2px #2180ac">
            <th><p class="text-primary">Forename</p></th>
            <th><p class="text-primary">Lastname</p></th>
            <th><p class="text-warning" style="margin-left:14px">Edit</p></th>
            <th><p class="text-danger" style="margin-left:14px">Delete</p></th>   
        </tr>
    </div>
       
        @foreach($students_obj0 as $student) <!---so basically you all the students or students_obj are the obj of the model you working with remember so do not get lost with this var OK?--->
        <tr>
            <th>{{ $student['Forename'] }}</th> <!---print the value "Forename" of array "$student"--->
            <th>{{ $student['Lastname'] }}</th> <!---------------------------------------------------------->
            <th><a href="{{action('Student_controller@edit', $student['id'])}}"><button type="button" class="btn btn-outline-warning">edit</button></a></th>
            <th>
                <form method="post" action="{{action('Student_controller@destroy', $student['id'])}}", >
                {{csrf_field()}} 
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit" class="btn btn-outline-danger">delete</button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
    <a href="{{route('test.create')}}"><button type="button" class="btn btn-outline-primary form-control">Add Student</button></a> 
    </div>

@endsection