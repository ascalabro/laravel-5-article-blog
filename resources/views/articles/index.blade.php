@extends('layout')

@section('content')

<h3>Articles</h3>
<hr>
@foreach ($articles as $article)
<article class="panel-primary">
    {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger pull-right']) !!}
    {!! Form::close() !!}
    <h2 class="panel-title">
        <a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->title }}</a>
    </h2>
    <span class="label label-default">Created at: {{$article->published_at}}</span>
    <div class="panel-body">
        {{$article->body}}
    </div>
</article>
<hr>
@endforeach
@stop

@section('footer')
<div class="navbar navbar-default navbar-nav navbar-left">
    <ul class=" input-group-btn pull-left">
         <li><a class="btn btn-success btn-sm " href="{{action('ArticlesController@create')}}">Create New Article</a></li>
    </ul>
</div>
@stop