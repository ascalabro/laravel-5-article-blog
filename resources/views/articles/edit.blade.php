@extends('layout')

@section('content')
<h3>Edit: {!! $article->title !!}</h3>
    @include('errors.list')
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.partials._form', ['submitButtonText' => 'Add Article'])
    {!! Form::close() !!}
@stop