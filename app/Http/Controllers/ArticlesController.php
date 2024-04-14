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
        $articles=Article::all();
        return view('articles/index',['articles'=>$articles]);
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
}
