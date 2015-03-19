@extends('app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h2 class="h2">News Articles</h2>
        <span class='caption'>To Create/Edit/Delete articles on this site, register for a free account. This is Angelo's Laravel sandbox.</span>
    </div>
    <hr>
    @if (!Auth::guest())
    <a class="btn btn-success btn-sm pull-left" href="{{action('ArticlesController@create')}}">Create New Article</a>
    @endif
    <div class="row ">
        <div class="col-md-10 col-md-offset-1">
            @foreach ($articles as $article)
            <article class="panel-primary container-fluid">
                <div class="row">
                <ul class="pull-right input-group list-unstyled">
                    <li class="input-lg">
                        <a class="btn btn-primary btn-sm" href="{{action('ArticlesController@edit', [$article->id])}}">Edit This Article</a>
                    </li>
                    <li class="input-lg">
                        {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
                        {!! Form::submit('Delete This Article', ['class' => 'btn btn-sm btn-danger pull-right']) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
                </div>
<!--                <div class="row">

                </div>-->
                <div class="row">

                <h2 class="panel-title">
                    <a href="{{action('ArticlesController@show', [$article->id])}}">{{ $article->title }}</a>
                </h2>
                <span class="label label-default">Created at: {{$article->published_at}}</span>
                <div class="panel-body">
                    {{$article->body}}
                </div>
                </div>
            </article>
            <hr>
            @endforeach
        </div>
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