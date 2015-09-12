<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link href="/css/main.css" rel="stylesheet">
        <link href="/vendor/semantic/ui/dist/semantic.css" rel="stylesheet">
        <!--<link href="/css/app.css" rel="stylesheet">-->
        <link href="/vendor/ivaynberg/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Fonts -->
        <!--<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="ui container">
            @include('partials.nav')

            @include('flash::message')

            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="/vendor/components/jquery/jquery.min.js"></script>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>-->
        <script src="/vendor/ivaynberg/select2/dist/js/select2.min.js" type="text/javascript"></script>
        <script src="/vendor/semantic/ui/dist/semantic.min.js" type="text/javascript"></script>
        <script type="text/javascript">
$('#flash-overlay-modal').modal();

$(document).ready(function () {
    $('.menu .item').tab();
    $('.dropdown')
            .dropdown({
                action: 'hide'
            })
            ;
});
;
//            $('div.alert').not('.alert-important').delay(3000).slideUp(300);
        </script>

        @yield('footer')
    </body>
</html>
