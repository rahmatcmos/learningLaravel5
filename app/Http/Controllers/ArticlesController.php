<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('articles.index',compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    public function show($id){
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }
}
