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
    public function create(Request $request){
        $article =  new Article();
        $article->image = $request->image;
        $article->titre = $request->titre;
        $article->text = $request->text;
        $article->save();
        return redirect()->back();
    }
}

