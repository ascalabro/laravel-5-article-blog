@extends('app')

@section('content')
<div class="container">
    <a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<h3>Edit: {!! $article->title !!}</h3>
    @include('errors.list')
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.partials._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}
		</div>
	</div>
</div>
@stop