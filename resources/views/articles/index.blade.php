@extends('app')
@section('content')
<!--   <div class="ui two column stackable grid">-->
<!--        <div class="column">
            <div class="ui segment">Content</div>
        </div>
        <div class="column">
            <div class="ui segment">Content</div>
        </div>-->
<div class="ui segment padded">
    <div class="ui stackable grid">
        <div class="five wide column">
            <div class="ui segment">Content 3 </div>
        </div>
        <div class="eleven wide column">
            <div class="ui segment">
                <div class="jumbotron">
                    <h2 class="ui header">News Articles<div class="sub header">To Create/Edit/Delete articles on this site, register for an account(No cost, no email/info is stored, just a sandbox site). This is Angelo's Laravel sandbox.</div></h2>
                </div>
                <div class="ui raised segment item">
                    @foreach ($articles as $article)
                    <!--<article class="panel-primary container-fluid  well">-->
                    <div class="ui items">
                        <div class="item">
                            <div class="content">
                                <a href="{{action('ArticlesController@show', [$article->id])}}" class="header">{{ $article->title }}</a>
                            </div>
                        </div>

                        <span class="label label-default">Created at: {{$article->created_at}}</span>
                        <span class="label label-info">Published at: {{$article->published_at}}</span>
                        <span class="label label-primary">Updated at: {{$article->updated_at}}</span>
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
                    @unless(Auth::guest())
                    <div class="row">
                        <ul class="pull-left input-group list-inline">
                            <li class="input-lg">
                                <a class="btn btn-success btn-sm " href="{{action('ArticlesController@create')}}">Create New Article</a>
                            </li>
                            <li class="input-lg">
                                <a class="btn btn-primary btn-sm" href="{{action('ArticlesController@edit', [$article->id])}}">Edit This Article</a>
                            </li>
                            <li class="input-lg">
                                {!! Form::model($article, ['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
                                {!! Form::submit('Delete This Article', ['class' => 'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </div>
                    @endunless
                    <!--</article>-->
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
<div class="ui segment padded">
    <h5>The footer section</h5>
    <div class='nav'>
        <nav class="navbar navbar-default">
            <ul>
                <li>menu item 1</li>
            </ul>
        </nav>
    </div>
</div>
@stop