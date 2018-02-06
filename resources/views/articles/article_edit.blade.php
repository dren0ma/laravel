@extends('partials/main')
@section('title')
    Edit Article
@endsection
    
@section('main_content')
    <h1>Edit Article</h1>
    <form method="POST">
        {{ csrf_field() }}
        Title: <input type="text" name="title" value="{{$article->title}}"><br>
        Content: <textarea name="content">{{$article->content}}</textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>

@endsection