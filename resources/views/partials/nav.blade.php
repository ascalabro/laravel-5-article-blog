<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!--        <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
                </div>-->

        <div class="ui inverted segment">
            <div class="ui inverted secondary pointing menu">
                <a class="active item" href="/">
                    Home
                </a>
                <a class="item" href="/search">
                    Travel Search
                </a>
                <a class="item" href="/articles">
                    Articles
                </a>
                <a class="item" href="/about">
                    About
                </a>
                <div class=" right menu ">
                    <div class="item">
                        {!! link_to_action('ArticlesController@show', "Latest Article: " . $latest->title, [$latest->id]) !!}
                    </div>
                    <div class="item">
                        @if (Auth::guest())
                        <li class="item "><a href="/auth/login">Login</a></li>
                        <li class="item "><a href="/auth/register">Register</a></li>
                        @else
                        <div class="ui item dropdown button navbar" tabindex="0">
                            <div class="text">Go to</div>
                            <i class="dropdown icon" tabindex="0"><div class="menu"></div></i>
                            <div class="menu transition hidden" tabindex="-1">
                                <a class="item" href="#link1"><i class="home icon"></i> Home</a>
                                <a class="item" href="#link2"><i class="users icon"></i> Browse</a>
                                <a class="item" href="#/latest"><i class="search icon"></i> Latest Deals</a>
                                <a class="item" href="/auth/logout"><i class="sign out icon"></i> Log Out</a>
                            </div>      
                        </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        </div>
    </div>
</nav>