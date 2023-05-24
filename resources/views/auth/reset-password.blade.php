@extends('auth.layout.app')
@section('form')
<h5 class="text-muted font-weight-normal mb-4">Create a free account.</h5>
<form class="forms-sample" action="{{ route('password.update') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $request->email) }}">
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
    </div>
    <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm New Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
    </div>
    <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Remember me
        </label>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Reset Password</button>
    </div>
</form>
@endsection