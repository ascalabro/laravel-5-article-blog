<!doctype html>
<html lang="us">
    <head>
        <meta charset="UTF-8">
        <title>Last day flights project title</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div class="jumbotron">
            <div class="container ">
                <h1>My News Articles</h1>
                <p>This is where I write articles about Hit Promotional Products Inc. My beloved employer.</p>
                <p><a class="btn btn-primary btn-lg" href="{{action('ArticlesController@index')}}" role="button">View Latest Articles &raquo;</a></p>
            </div>
        </div>
        <div class="container col-sm-9 pull-right">
            @yield('content')
        </div>
        <hr>
        <div class="row container">
            @yield('footer')
        </div>
    </body>
</html>