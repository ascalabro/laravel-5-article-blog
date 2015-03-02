@extends('layout')

@section('content')
<a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>
<hr>
<h3 class="panel-title">
            <a href="#">{{ $article->title }}</a>
        </h3>

    <article class="panel-primary">
        <div class="panel-body">
            {{$article->body}}
        </div>
    </article>
@stop