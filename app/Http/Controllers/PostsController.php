<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;  // <<< See here - no real class, only an alias



class PostsController extends BaseController
{
    public function show($post){
        $posts =[
            'first-post' => 'my first post been posted',
            'second-post' => 'my second post been posted'
        ];
        if (!array_key_exists($post, $posts)){
            abort(404, 'Page not found...');
        }
        return view('post', ['post' => $posts[$post]]);

    }
}