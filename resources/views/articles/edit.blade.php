@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl bg-dark">文章列表</h1>
    <p>編輯文章</p>
    @if($errors->any())
    <div class="">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('articles.update',$article)}}" method="post">
   @csrf
   @method('patch')
        <div class="field">
        <label for="title">標題</label>
        <input type="text" value="{{$article->title}}" name="title" id="title" class="border border-gray-300 p-2">
    </div>
    <div class="field">
        <label for="">內文</label>
        <textarea name="content" id="" cols="30" rows="10">{{$article->content}}</textarea>
       
    </div>
    <div class="actions">
        <button type="submit" >更新文章</button>
    </div>
    </form>
    @endsection