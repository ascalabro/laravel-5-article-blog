@extends('app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h2 class="h2">News Articles</h2>
        <span class='caption'>To Create/Edit/Delete articles on this site, register for an account(No cost, no email/info is stored, just a sandbox site). This is Angelo's Laravel sandbox.</span>
    </div>
    <hr class="divider">

    <div class="col-md-10 col-md-offset-1">
        @foreach ($articles as $article)
        <article class="panel-primary container-fluid  well">

            <div class="row">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->title }}</a></h3>
                        <span class="label label-default">Created at: {{$article->created_at}}</span>
                        <span class="label label-info">Published at: {{$article->published_at}}</span>
                        <span class="label label-primary">Updated at: {{$article->updated_at}}</span>
                    </div>
                    <div class="panel-body">
                        {{$article->body}}
                    </div>
                    @unless($article->tags->isEmpty())
                    <div class="panel-footer">
                        @foreach($article->tags as $tag)
                        #{{$tag->name}},
                        @endforeach
                    </div>
                    @endunless
                </div>
            </div>
            @unless(Auth::guest())
            <div class="row">
                <ul class="pull-left input-group list-inline">
                    <li class="input-lg">
                        <a class="btn btn-success btn-sm " href="{{action('ArticlesController@create')}}">Create New Article</a>
                    </li>
                    <li class="input-lg">
                        <a class="btn btn-primary btn-sm" href="{{action('ArticlesController@edit', [$article->id])}}">Edit This Article</a>
                    </li>
                    <li class="input-lg">
                        {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
                        {!! Form::submit('Delete This Article', ['class' => 'btn btn-sm btn-danger']) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </div>
            @endunless
        </article>
        <hr>
        @endforeach
    </div>
</div>

@stop

@section('footer')
<div class="container">
    <h5>The footer section</h5>
    <div class='nav'>
        <nav class="navbar navbar-default">
            <ul>
                <li>menu item 1</li>
            </ul>
        </nav>
    </div>
</div>
@stop