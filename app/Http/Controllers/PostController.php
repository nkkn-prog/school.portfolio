<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;

class PostController extends Controller
{
        public function index(Post $post){/*PostはPostモデルのインスタンスで、これを宣言することでそのインスタンスに含まれる値が$postに入るということを示している。
        */
        return view('posts/index')-> with (['posts'=>$post->getPaginateByLimit()]); //['posts'=>$post->get()]は連想配列の概念, withメソッドの書き方
        } 
        
    
        public function show(Post $post){
            
            return view('posts/show')->with(['post'=>$post]);
        }
        
        public function create(Category $category)
        {
             return view('posts/create') ->with(['categories'=> $category->get()]);
         }
        
        public function store(PostRequest $request, Post $post)
        {
            $input = $request['post'];
            $post ->fill($input) ->save();
            return redirect ('/posts/' . $post->id);
        }
        
        public function edit(Post $post)
        {
            return view('posts/edit') ->with(['post' =>$post]);
        }
        
        public function update(PostRequest $request, Post $post)
        {
            $input = $request['post'];
            $post ->fill($input) ->save();
            return redirect ('/posts/' . $post->id);
        }
        
        public function delete(Post $post)
        {
            $post->delete();
            return redirect('/');
        }
        
        
}