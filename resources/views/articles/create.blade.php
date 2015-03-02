@extends('layout')

@section('content')

<h3>Create New Article</h3>
    @if($errors->any())
    <ul class="">
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
    @endif
    {!! Form::open(['url' => 'articles']) !!}
        <div class='form-group'>
        {!! Form::label('title', 'Title: ') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
        {!! Form::label('body', 'Body: ') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
        {!! Form::label('published_at', 'Published On: ') !!}
        {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}


@stop