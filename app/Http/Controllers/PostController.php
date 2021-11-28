<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
        public function index(Post $post){/*PostはPostモデルのインスタンスで、これを宣言することでそのインスタンスに含まれる値が$postに入るということを示している。
        */
        return view('posts/index')-> with (['posts'=>$post->getPaginateByLimit()]); //['posts'=>$post->get()]は連想配列の概念
        }   
    
        public function show(Post $post){
            return view('posts/show')->with(['post'=>$post]);
        }
        
        public function create(){
            return view('posts/create');
        }
        
        public function store(PostRequest $request, Post $post){
            $input = $request['post'];
            $post ->fill($input) ->save();
            return redirect ('/posts/' . $post->id);
        }
        
    
}