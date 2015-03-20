<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
use Auth;

class ArticlesController extends Controller {

    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index() {
//            return \Auth::user()->username;
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article) {
        return view('articles.show', compact('article'));
    }

    public function create(Article $article) {
        $tags = \App\Tag::lists('name', 'id');
        return view('articles.create', compact('article', 'tags'));
    }

    public function store(Requests\ArticleRequest $request) {
        $article = Auth::user()->articles()->save(new Article($request->all()));
        $this->syncTags($article, $request->input('tag_list'));
        //$article->tags()->attach($request->input('tag_list'));
        // Set flash message
        flash()->overlay('Your article has been created!', 'Success');
        return redirect('articles');
    }

    public function edit(Article $article) {
        $tags = \App\Tag::lists('name', 'id');
        return view('articles.edit', compact('article', 'tags'));
    }

    public function update(Article $article, Requests\ArticleRequest $request) {
        $article->update($request->all());
        $this->syncTags($article, $request->input('tag_list'));
        return redirect('articles');
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect('articles');
    }

    /**
     * Sync up the lst of tags for article
     * @param \App\Article $article
     * @param array $tagList
     */
    private function syncTags(Article $article, array $tagList) {
        $article->tags()->sync($tagList);
    }

}
