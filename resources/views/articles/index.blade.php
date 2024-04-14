@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl bg-dark">文章列表</h1>
    <p>文章內容</p>
    <a href="{{route('articles.create')}}">新增文章</a>
    
    @foreach($articles as $article)
        <div>
            <h2>{{$article->title}}</h2>
            <p>{{$article->created_at}}由{{$article->user->name}}分享</p>
        </div>

    @endforeach
  
    @endsection