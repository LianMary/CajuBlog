<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = "Nao sei o q por aqui";
        return view('posts.index' , ['post' => $post]);
    }
}
