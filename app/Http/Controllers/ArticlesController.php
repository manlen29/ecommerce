<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class ArticlesController extends Controller
{

	public function index()
    {
        $articles = Article::paginate(3);
        
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    { 
        $article = new Article;
        
        $article->user_id = Auth::user()->id;
        $article->content = $request->content;
        $article->live = (boolean)$request->live;
        $article->post_on = $request->post_on;
        
        $article->save();
        
        return redirect('/articles');
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
    	$article = Article::findOrFail($id);
    	
    	return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        
        if (! isset ($request->live ))
        	$article->update(array_merge($request->all(),['live'=>false] ));
        else 
        	$article->update($request->all());
        
        return redirect('/articles');
    }

    public function destroy($id)
    {
//         $article = Article::findOrFail($id);
//         $article->delete();
        
    	Article::destroy($id); //([1,2,3]);
        
        return redirect('/articles');
        
    }
}
