<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Video;

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
    $request->validate([
        'title' => 'required|string|max:100',
        'description' => 'required|string|max:200',
        'author' => 'required|string|max:150',
        'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    $filePath = null;
    
    if ($request->hasFile('attachment')) {
        $filePath = $request->file('attachment')->store('attachments', 'public');
    }
    Article::create([
        'title' => $request->title,
        'description' => $request->description,
        'author' => $request->author,
        'status' => 'em andamento', 
        'attachment' => $filePath,
    ]);

    return redirect()->route('articles.index')->with('success', 'Chamado criado com sucesso!');
}

public function visualizar($id)
{
    $article = Article::findOrFail($id);

    $caminhoCompleto = storage_path('app\public\attachments' . $article->attachment);

    if (!file_exists($caminhoCompleto)) {
        return redirect()->back()->with('error', 'Arquivo não encontrado.');
    }
    return response()->json($article);
}

public function edit(Article $article)
{
    $videos = Video::where('playlist_id', $article->id)->get();
    return view('articles.edit', compact('article', 'videos'));
}

public function update(Request $request, Article $article)
{
    $article->update($request->all());
    return redirect()->route('articles.index');

    if ($request->video_title && $request->video_url && $request->video_author) {
        Video::create([
            'playlist_id' => $article->id,
            'title' => $request->video_title,
            'url' => $request->video_url,
            'author' => $request->video_author
        ]);
    }

    return redirect()->route('articles.index')->with('success', 'Article and associated video updated successfully.');
}

public function destroy(Article $article)
{
    $article->delete();
    return redirect()->route('articles.index');
}

public function fetch()
{
    $articles = Article::all();
    return response()->json($articles);
}

public function close(Article $article)
{
    $article->update(['status' => 'Encerrado']);

    return redirect()->route('articles.index')
        ->with('success', 'Chamado encerrado com sucesso!');
}

}
