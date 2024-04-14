<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\User;
class ArticlesController extends Controller
{
    // public function __construct()
    // {
     
    //     $this->middleware('auth');
   
    // }

    public function index(){
        // $articles=Article::orderBy('id','desc')->get();
        // $articles=Article::paginate(3);
        $articles=Article::orderBy('id','desc')->paginate(10);
        return view('articles/index',['articles'=>$articles]);
    }

    public function show($id){
        $article = Article::find($id);
        return view('articles.show',['article'=>$article]);
    }
    public function create(){
        return view('articles/create');
    }

    public function store(Request $request){
        // dd('ff');
       
        $content =$request->validate([
            'title'=>'required',
            'content'=>'required|min:10'
        ]);
        auth()->user()->articles()->create($content);
        return redirect()->route('root')->with('notice','文章新增成功');
    }

    public function edit($id){
        $article=auth()->user()->articles->find($id);
        // $article=Article::find($id);
        return view('articles.edit',['article'=>$article]);
    }


    public function update(Request $request,$id){
        $article=auth()->user()->articles->find($id);
        $content =$request->validate([
            'title'=>'required',
            'content'=>'required|min:10'
        ]);
        $article->update($content);
        return redirect()->route('root')->with('notice','文章更新成功!');
    }
}
