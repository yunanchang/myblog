@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl bg-dark">{{$article->title}}</h1>
    <p>{{$article->content}}</p>
    <a href="{{route('articles.index')}}">回文章列表</a>
    @endsection