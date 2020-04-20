<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('web.index');
    }
    public function about(){
        return view('web.about');
    }
}
