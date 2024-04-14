@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4xl bg-dark">文章列表</h1>
    <p>文章內容</p>
    <a href="{{ route('articles.create') }}">新增文章</a>

    @foreach ($articles as $article)
        <div>
            <h2>
                <a href="{{ route('articles.show', $article) }}">
                    {{ $article->title }}</a>
            </h2>
            <p>{{ $article->created_at }}由{{ $article->user->name }}分享</p>
            {{-- <a href="{{route('articles.edit',['article'=>$article->id])}}">編輯</a> --}}
            <div class="flex">
                <a href="{{ route('articles.edit', $article) }}">編輯</a>
                <form action="{{ route('articles.destroy', $article) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">刪除</button>
                </form>
            </div>

        </div>
    @endforeach
    {{ $articles->links() }}
@endsection
