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
        <h1>Create Blog</h1>
        <form action="/posts" method='POST'>
            @csrf
                <div class="title">
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title')}}"/>
                    <p class='title_error' style="color:red">{{ $errors->first('post.title')}}</p>
                </div></br>
                    <textarea name="post[body]" row="3" colm="30" placeholder="ブログの内容">{{ old('post.body')}}</textarea></br>
                    <p class='body_error' style="color:red">{{$errors->first('post.body')}}</p>
            <input type="submit" value="ブログを作成"/>
        </form>
        <p class="back"><a href="/">back</a></p>
    </body>
</html>