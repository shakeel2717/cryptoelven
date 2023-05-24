@extends('auth.layout.app')
@section('form')
<h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
<form class="forms-sample" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
    </div>
    <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Remember me
        </label>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sign In</button>
    </div>
    <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Don't have an Account? Sign Up</a>
    <a href="{{ route('password.request') }}" class="d-block mt-3 text-muted">Reset Password</a>
</form>
@endsection