<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $article =  Article::limit(4)->get();
        return view('/pages.blog', compact('article'));
    }
    public function store(Request $request){
        $article =  new Article();
        $article->image = $request->image;
        $article->titre = $request->titre;
        $article->text = $request->text;
        $article->save();
        return redirect()->back();
    }
    public function destroy($id){
        $article = Article::find($id);
        $article->delete();
        return redirect()->back();
    }
    public function show($id){
        $article = Article::find($id);
        return view('pages/show', compact('article'));
    }
    public function edit(Request $request, $id){
        $article = Article::find($id);
        $article->image = $request->image;
        $article->titre = $request->titre;
        $article->text = $request->text;
        $article->save();
        return redirect()->back();
    }
}

