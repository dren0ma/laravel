@extends('partials/main')

@section('title')
    {{$article->title}}
@endsection

@section('main_content')
    <h3>{{$article->title}}</h3>
    <p>
        {{$article->content}}
    </p>
    <a href='{{url("articles/$article->id/edit")}}'><button>Edit Article</button></a>
    <a href="/articles"><button>Back</button></a>
@endsection