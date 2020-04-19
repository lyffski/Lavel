<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_model;

class Student_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.createTest');
    }           //foldername.filename here createTest === createTest.blade.php

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "forename" => 'required',
            'lastname' => 'required'
        ]);
        $student_obj1 = new Student_model([
            'forename' => $request->get('forename'),
            'lastname' => $request->get('lastname')
        ]);
        $student_obj1->save();
        return redirect()->route("test.create")->with('success', 'You successfully added a Student');
    }                   //route to folder:"test" to func of the current ctr here you use the "create" func and passing with() that contain a message with key "success"

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
