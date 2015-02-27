@extends('layout')

@section('content')

<h3>Articles</h3>

    @foreach ($articles as $article)
    <article class="panel-primary">
        <h2 class="panel-title">
            <a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->title }}</a>
        </h2>
        <span class="label label-default">Created at: {{$article->published_at}}</span>
        <div class="panel-body">
            {{$article->body}}
        </div>
    </article>
    @endforeach
@stop