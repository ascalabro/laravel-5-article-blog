@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h3>Create New Article</h3>
                            @include('errors.list')
                            {!! Form::open(['url' => 'articles']) !!}
                                @include('articles.partials._form', ['submitButtonText' => 'Create Article'])
                            {!! Form::close() !!}

		</div>
	</div>
</div>


@stop