@extends('app')

@section('content')
<div class="container">
    <a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>
<hr>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3>Create New Article</h3>
                            @include('errors.list')
                            {!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}
                                @include('articles.partials._form', ['submitButtonText' => 'Create Article'])
                            {!! Form::close() !!}

		</div>
	</div>
</div>


@stop