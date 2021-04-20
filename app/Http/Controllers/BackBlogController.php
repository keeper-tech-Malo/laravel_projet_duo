<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\portfolio;
use Illuminate\Http\Request;

class BackBlogController extends Controller
{
    public function index()
    {
        $article =  Article::all();

        return view('/pages.backBlog',compact('article'));
    }
}
