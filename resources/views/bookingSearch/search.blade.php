@extends('app')

@section('content')
<!--<a class="btn btn-primary btn-sm" href="{{URL::previous()}}">Back</a>-->
    <div class="ui three column stackable grid">
        <div class="four wide column">
            <div class="ui padded segment">
                <div class="ui padded segment">Content 3 </div>
            </div>
        </div>
        <div class="nine wide padded column">
                <h2 class="ui header">Search Form</h2>
                <div class="ui top attached tabular menu">
                    <a class="item" data-tab="first">First</a>
                    <a class="item" data-tab="second">Second</a>
                    <a class="item active" data-tab="third">Third</a>
                </div>
                <div class="ui bottom attached tab segment" data-tab="first">
                    First
                </div>
                <div class="ui bottom attached tab segment" data-tab="second">
                    Second
                </div>
                <div class="ui bottom attached tab segment active" data-tab="third">
                    Third
                </div>
        </div>
        <div class="three wide column">
            <div class="ui padded segment">
                <script async src="//www.travelpayouts.com/weedle/widget.js?marker=85054&host=hydra.aviasales.ru&locale=en&currency=usd&destination=NYC&destination_name=New%20York%2C%20NY" charset="UTF-8"></script>
            </div>
        </div>
    </div>
@stop