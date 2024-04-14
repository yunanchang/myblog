@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl bg-dark">文章列表</h1>
    <p>新增文章</p>
    @if($errors->any())
    <div class="">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('articles.store')}}" method="post">
   @csrf
        <div class="field">
        <label for="title">標題</label>
        <input type="text" value="{{old('title')}}" name="title" id="title" class="border border-gray-300 p-2">
    </div>
    <div class="field">
        <label for="">內文</label>
        <textarea name="content" id="" cols="30" rows="10">{{old('content')}}</textarea>
       
    </div>
    <div class="actions">
        <button type="submit" >新增文章</button>
    </div>
    </form>
    @endsection