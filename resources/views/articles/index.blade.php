@extends('app')

@section('content')
<div class="container">
    <div class="">
    <div class="row">
        <h3 class="">Articles Index</h3>
        <a class="btn btn-success btn-sm pull-left" href="{{action('ArticlesController@create')}}">Create New Article</a>
    </div>

    <hr>
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
</div>

@stop

@section('footer')
<div class="navbar navbar-default navbar-nav navbar-left">
    <ul class=" input-group-btn pull-left">
        <!--<li><a class="btn btn-success btn-sm " href="{{action('ArticlesController@create')}}">Create New Article</a></li>-->
    </ul>
</div>
@stop