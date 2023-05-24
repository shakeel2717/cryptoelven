@extends('auth.layout.app')
@section('form')
<h5 class="text-muted font-weight-normal mb-4">Forgot Password.</h5>
<p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
<hr>
<form class="forms-sample" action="{{ route('password.request') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Reset Password</button>
    </div>
    <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Remember Password? Try now!</a>
</form>
@endsection