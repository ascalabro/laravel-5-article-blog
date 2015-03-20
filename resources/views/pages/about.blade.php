@extends('app')
@section('content')
<div class="container">
<h3>About {{$name}} Page</h3>
<p>
    Track this project on my {!! Html::link("https://github.com/ascalabro/lastdayflights.com", "GitHub") !!}.
    <br>
    Lorem ipsum dolor sit amet, pro labitur labores phaedrum et, hinc eirmod sensibus an qui. Erat audire meliore est in. Sanctus insolens ea mea, modus partiendo at eos. Vim at simul qualisque. In semper oblique pro, qui ad quidam qualisque, cum assum labores cu. Eam no nibh perfecto tincidunt.

Sale timeam usu te. Adhuc corpora appetere sit in. Mei ei praesent accommodare, aliquam volumus at per. Ea qui illud debet, usu vituperata repudiandae ut. Ex prompta fuisset detracto duo, an ullum consectetuer vim, suas idque philosophia nec no. Vis ei solet repudiandae, te sit eirmod oblique atomorum.
</p>
@if (count($people))
<h5>Currently registered users list:</h5>
<ol>
@foreach($people as $person)
<li>{{$person->username}} - {{$person->email}}</li>
@endforeach
</ol>
@endif
</div>
@stop
@section('footer')
<hr>
<div class="container">
    <h5>The footer section</h5>
    <div class='nav'>
        <nav class="navbar navbar-default">
            <ul class="list-unstyled">
                <li>menu item 1</li>
                <li>menu item 2</li>
            </ul>
            </nav>
    </div>
</div>
@stop