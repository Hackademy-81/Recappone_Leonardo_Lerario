<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::create(
            [
                'author' => Auth::user()->name,
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'img' => $request->has('img') ? $request->file('img')->store('public/cover') : '/img/barbari.png',

            ]
        );
        return redirect()->route('welcome')->with('message', 'articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
          $article->title = $request->title;
          $article->body = $request->body;
          $article->img = $request->has('img') ? $request->file('img')->store('public/cover') : '/img/barbari.png';
          $article->save();
          
          return redirect()->route('article.show', compact('article'))->with('message','Articolo modificato' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('welcome')->with('message', 'Articolo Eliminato!');
    }
}
