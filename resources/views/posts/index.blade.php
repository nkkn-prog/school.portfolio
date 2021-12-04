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
    @extends('layouts.app')
    @section('content')
    <body>
        {{Auth::user()->name}}
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach($posts as $post)
            <div class="post">
                <h2 class="title"><a href='/posts/{{$post ->id}}'>{{$post ->title}}</a></h2>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            @endforeach
        </div>
        <div class='paginate'>
            {{$posts->links() }}
        </div>
        <div>
            @foreach($questions as $question)
            <a href="https://teratail.com/questions/{{ $question['id'] }}">
            <p>{{$question['title']}}</p>
            @endforeach
        </div>
        <p class="create_blog"><a href="/posts/create">Create Blog</a></p>
        <p><a href="/login">ログインはこちら</a></p>
            
    </body>
    @endsection
</html>