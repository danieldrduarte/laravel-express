@extends('template')

@section('title')
    Login
@endsection

@section('content')
    <form method="POST" action="login">
        {!! csrf_field() !!}
        <h1>Login</h1>
        <div class="form-group">
            Email
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            Password
            <input type="password" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="checkbox" name="remember" > Remember Me
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection