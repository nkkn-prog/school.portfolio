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
        <h1>Edit Blog</h1>
        <form action="/posts/{{$post->id}}" method='POST'>
            @csrf
            @method('PUT')
            <div class="title">
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{$post->title}}"/>
                    <p class='title_error' style="color:red">{{ $errors->first('post.title')}}</p>
                </div></br>
                    <textarea name="post[body]" row="3" colm="30" placeholder="ブログの内容">{{$post->body}}</textarea></br>
                    <p class='body_error' style="color:red">{{$errors->first('post.body')}}</p>
            <input type="submit" value="保存"/>
            <p class="back"><a href="/">back</a></p>
    </body>
</html>