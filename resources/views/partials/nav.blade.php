<div class="ui stackable container inverted menu">
    <!--                <a href="/" class="brand item">Project Name</a>-->
    {!! link_to('/', "Home", ['class'=>'item']) !!}
    {!! link_to('/search', "Travel Search", ['class'=> Request::is('search') || Request::is('/') ? 'item active' : 'item']) !!}
    {!! link_to('/articles', "Articles", ['class'=> Request::is('articles') ? 'item active' : 'item']) !!}
    {!! link_to('/about', "About", ['class'=> Request::is('about') ? 'item active' : 'item']) !!}
    <a class="right container menu stackable">
        {!! link_to_action('ArticlesController@show', "Latest: " . $latest->title, [$latest->id], ['class'=>'item']) !!}
        @if (Auth::guest())
            {!! link_to('auth/login', "Login", ['class'=>'item']) !!}
            {!! link_to('auth/register', "Register", ['class'=>'item']) !!}
        @else
        <div class="ui dropdown item">Account
            <i class="dropdown icon"></i>
            <div class="menu stackable">
                <div class="ui item"><a href="#/account/settings" class="ui">Settings</a></div>
                <div class="ui divider"></div>
                <div class="item">{!! link_to('auth/logout', "Logout", ['class'=>'ui']) !!}</div>
            </div>
        </div>
        @endif
    </a>
    <!--<div class="ui pointing dropdown link item" tabindex="0">
          <span class="text">Account</span>
          <i class="dropdown icon"></i>
          <div class="menu transition hidden" tabindex="-1">
            <div class="header">Categories</div>
            <div class="item">
              <i class="dropdown icon"></i>
              <span class="text">Clothing</span>
              <div class="menu transition hidden">
                <div class="header">Mens</div>
                <div class="item">Shirts</div>
                <div class="item">Pants</div>
                <div class="item">Jeans</div>
                <div class="item">Shoes</div>
                <div class="divider"></div>
                <div class="header">Womens</div>
                <div class="item">Dresses</div>
                <div class="item">Shoes</div>
                <div class="item">Bags</div>
              </div>
            </div>
            <div class="item">&lt;a&gt;Home Goods&lt;/a&gt;</div>
            <div class="item">Bedroom</div>
            <div class="divider"></div>
            <div class="header">Order</div>
            <div class="item">Status</div>
            <div class="item">Cancellations</div>
          </div>
        </div>-->
</div>