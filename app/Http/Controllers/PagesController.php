<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data = array(
            "title" => "Welcome to Lavel", //"key" str in ctr, but in view a $key that display the value
        );
        return view('web.pages.index',)->with($data); //the best way to pass a array of data
    }
    
    public function about(){
        return view('web.pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['PHP', 'Python', 'R']
        );
        return view('web.pages.services')->with($data);
    }
}       
