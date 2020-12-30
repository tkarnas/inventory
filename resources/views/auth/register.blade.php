@extends('layouts.auth')
@section('content')
<div class="col-md-6 mx-auto mt-5 justify-content-center">
    <div class="card">
        <div class="card-header">Register as a new user</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- first name -->
                <div class="form-group">
                    <label for="first">First Name</label>
                    <input value="{{ @old('first_name') }}" name="first_name" type="text" class="form-control" id="first">
                    @if ($errors->has('first_name'))
                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                    @endif
                </div>
                 <!-- last name -->
                 <div class="form-group">
                    <label for="last">Last Name</label>
                    <input value="{{ @old('last_name') }}" name="last_name" type="text" class="form-control" id="last">
                    @if ($errors->has('last_name'))
                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{ @old('email') }}" name="email" type="text" class="form-control"
                        id="email">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                 <!-- Email Address -->
                 <div class="form-group">
                    <label for="username">Username</label>
                    <input value="{{ @old('username') }}" name="username" type="text" class="form-control"
                        id="username">
                    @if($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <!-- password polje -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- password confirm polje -->
                <div class="form-group">
                    <label for="password-confirmation">Repeat your password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password-confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <div class="mt-3">
                    <a href="{{ route('login') }}" class="btn btn-link float-right">Login</a>
                    <div class="text-center float-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
