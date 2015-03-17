<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;
use Auth;

class ArticlesController extends Controller {


        public function __construct() {
            $this->middleware('auth', ['only' => 'create']);
        }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//            return \Auth::user()->username;
		$articles = Article::latest('published_at')->published()->get();
                return view('articles.index', compact('articles'));
	}

        public function show(Article $article)
        {
            return view('articles.show', compact('article'));
        }

        public function create()
        {
            return view('articles.create');
        }

        public function store(Requests\ArticleRequest $request)
        {
            $input = $request->all();
            Auth::user()->articles()->save(new Article($input));
            return redirect('articles');
        }

        public function edit(Article $article)
        {
            return view('articles.edit', compact('article'));
        }

        public function update(Article $article, Requests\ArticleRequest $request)
        {
            $article->update($request->all());
            return redirect('articles');
        }

        public function destroy($id)
        {
            Article::destroy($id);
            return redirect('articles');
        }

}
