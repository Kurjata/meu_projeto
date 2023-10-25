<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $articles = Article::all();
    return view('articles.index', compact('articles'));
}

public function create()
{
    return view('articles.create');
}

public function show(Article $article)
{
    return view('articles.show', compact('article'));
}

public function store(Request $request)
{
    Article::create($request->all());
    return redirect()->route('articles.index');
}

public function edit(Article $article)
{
    return view('articles.edit', compact('article'));
}

public function update(Request $request, Article $article)
{
    $article->update($request->all());
    return redirect()->route('articles.index');
}

public function destroy(Article $article)
{
    $article->delete();
    return redirect()->route('articles.index');
}
}
