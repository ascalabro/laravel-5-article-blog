@extends('app')

@section('content')
<div class="ui container">
    <h3 class="heading">Login</h3>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="ui form" role="form" method="POST" action="/auth/login">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="field">
            <label>E-Mail Address</label>
            <input value="{{ old('email') }}" type="email" name="email" placeholder="Email Address">
        </div>
        <div class="field">
            <label>Last Name</label>
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="field">
            <div class="ui checkbox">
                <input type="checkbox" name="remember">
                <label>Remember Me</label>
            </div>
        </div>
        <div class="field">
            <a href="/password/email">Forgot Your Password?</a>
        </div>
        <div class="field">
            <button type="submit" class="ui button">
                Login
            </button>
        </div>
    </form>
</div>
@endsection
