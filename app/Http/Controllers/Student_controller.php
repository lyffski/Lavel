<?php

namespace App\Http\Controllers; //namespace

use Illuminate\Http\Request;    //the request thing, I guess
use App\Student_model; //link up you model that you will be using to manipulate with data for db

class Student_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $students_obj0 = Student_model::all()->toArray();
        return view("test.indexTest", compact('students_obj0'));
    }   //return .php file with given compacted array named 'students'


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('test.createTest');
    }           //foldername.filename here createTest === createTest.blade.php


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){ //the request is via controller I guess
        $this->validate($request, [    //validate function after => severals condition can be given
            "forename" => 'required',
            'lastname' => 'required'
        ]);
        $student_obj1 = new Student_model([     //create a obj of Student_model that allow to manipulate with the data that have
            'forename' => $request->get('forename'),        //been passed in
            'lastname' => $request->get('lastname')     //yet here you get the values and save it under key which is before =>
        ]);
        $student_obj1->save();      //do not forget to save this obj (it is laravel func)
        return redirect()->route("test.index")->with('success', 'You successfully added a Student');
    }    //route to folder:"test" and use the func of the current controller you in here you use the "index()" and passing 
         //with() that contain a message with key "success"


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $student_obj1 = Student_model::find($id);
        return view('test.editTest', compact('student_obj1', 'id'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $this->validate($request, [
            'forename' => 'required',
            'lastname' => 'required'
        ]);
        $student_obj1 = Student_model::find($id);
        $student_obj1->forename = $request->get('forename');
        $student_obj1->lastname = $request->get('lastname');
        $student_obj1->save();
        return redirect()->route('test.index')->with('success', 'The data has been edited successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $student_obj1 = Student_model::find($id);
        $student_obj1 ->delete();
        return redirect()->route('test.index')->with('success', 'Record deleted successfully');
    }
}
