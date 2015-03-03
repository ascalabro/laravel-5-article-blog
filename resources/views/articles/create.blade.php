@extends('layout')

@section('content')

<h3>Create New Article</h3>
    @include('errors.list')
    {!! Form::open(['url' => 'articles']) !!}
        @include('articles.partials._form', ['submitButtonText' => 'Update Article'])
    {!! Form::close() !!}


@stop