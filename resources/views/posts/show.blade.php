<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"
        >
        
    </head>
    <body>
        <h1>Blog Name</h1>
            <div class="post">
                <h2 class="title">{{$post ->title}}</h2>
                <p class="body">{{$post ->body}}</p>
            </div>
            <p class="back"><a href="/">戻る</a></p>
            <p class="edit"><a href="/posts/edit/{{$post->id}}">編集</a></p>
            <form action="/posts/{{$post->id}}" method='POST' id="form_delete">
                @csrf
                @method('DELETE')
                <imput type="submit"/>
                <p class="delete"><span  style="color:blue; border-bottom: solid 1px blue" onclick="return deletePost(this)";>削除</span></p>
            </form>
            <script >
                function deletePost(e){
                    'use strict';
                    if(confirm ('削除すると復元できません。\本当に削除しますか？')){
                        document.getElementById('form_delete').submit();
                    }
                }
            </script>
            <a href="">{{ $post->category->name }}</a>
    </body>
</html>