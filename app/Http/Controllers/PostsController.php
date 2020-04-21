<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PostsModel; //with this link you can now create model in the controller file REMEMBER

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ //index() you should get all the data form db you connected to the framework
        $posts = PostsModel::orderBy('created_at', 'desc')->paginate(10);      //using eloquent which make it easier to do the db quires than SQL command
        return view("web.posts.index")->with('posts_key', $posts); //so 'posts_key' is the key that become the var in html and $posts is the values of the 'posts_key' REMEMBER THIS
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('web.posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){ //request because you get the var from a form in view files
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new PostsModel;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $post = PostsModel::find($id);
        return view('web.posts.show')->with('post_key', $post);
            //$posts = PostsModel::all();
            //$posts = PostsModel::orderBy('title','desc')->take(1)->get(); //Eloquent query
            //$posts =PostsModel::orderBy('title','desc')->get();
            //return PostsModel::where('title', 'Post Two')->get();
            //$posts = DB::select('SELECT * FROM posts'); //common SQL query
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $post = PostsModel::find($id);
        return view('web.posts.edit')->with('post_key', $post);
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
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = PostsModel::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $post = PostsModel::find($id);
        $post -> delete();
        return redirect('/posts')->with('success', 'Post removed successfully');
    }
}
