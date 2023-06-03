@extends('auth.layout.app')
@section('form')
<h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
<form class="forms-sample" action="{{ route('register') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="current-password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" autocomplete="current-password" placeholder="Password">
    </div>
    @if($refer != "default")
    <div class="form-group">
        <label for="refer">Sponser</label>
        <input type="text" class="form-control" id="refer" name="refer" value="{{ $refer }}">
    </div>
   @endif
    <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input" required>
            I Agree to Terms & Conditions
        </label>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sign In</button>
    </div>
    <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already have an Account? Sign In</a>
</form>
@endsection