@extends('app')

@section('content')

<div class="container">
    <a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>
<hr>
    <div class="row">
<h3 class="panel-title">
    <a href="#">{{ $article->title }}</a>
</h3>
        <div class="col-md-10 col-md-offset-1">
            <article class="panel-primary">
                <div class="panel-body">
                    {{$article->body}}
                </div>
            </article>
        </div>
    </div>
</div>

@stop