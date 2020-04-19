<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//test
Route::get('/test', function(){ 
    return view('/test/indexTest');
});
Route::resource('test', 'Student_controller'); //resource when
//endtest


Route::get('/posts/{post}', 'PostsController@show');




