@extends('app')

@section('content')

<div class="container">
    <a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>
    <hr>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $article->title }}</h3>
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

@stop