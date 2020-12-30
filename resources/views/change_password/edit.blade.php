@extends('layouts.app')

@section('content')
<div class="mt-7 col-sm-5 mx-auto">

    <h1>Set a new password</h1>
    <form action="{{ route('change_password.update', ['user' => $id]) }}" method="POST">
        <!-- CSRF Token-->
        @csrf
        <!-- Brand name -->

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="password_confirmation">Repeat your password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
        @if ($errors->has('password_confirmation'))
            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
        @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Change password</button>
    </form>
</div>
@endsection