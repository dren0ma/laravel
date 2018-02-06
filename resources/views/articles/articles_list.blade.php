@extends('partials/main')

@section('title')
    Articles List
@endsection

@section('main_content')
    <a href="{{url('articles/create')}}"><button>Create a New Article</button></a>
    
    <h3>List of Articles</h3>

    <ul>
        @foreach($articles as $article)
        <li>
            <a href='{{url("articles/$article->id")}}'>{{ $article->title }}</a>
            <a href='{{url("articles/$article->id/delete")}}'>
                <button>Delete Article</button>
            </a>
        </li>
        @endforeach
        
    </ul>


@endsection