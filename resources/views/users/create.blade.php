@extends('layouts.app')

@section('content')
<div class="col-sm-5 mx-auto">
    <form class="pt-5" action="{{ route('users.store')}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        <!-- Brand name -->

        <div class="form-group">

        <label for="first">First name</label>
        <input type="text" name="first_name" value="{{ @old('first_name') }}" class="form-control" id="first">
        @if ($errors->has('first_name'))
            <span class="text-danger">{{ $errors->first('first_name') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="last">Last name</label>
        <input type="text" name="last_name" value="{{ @old('last_name') }}" class="form-control" id="last">
        @if ($errors->has('last_name'))
            <span class="text-danger">{{ $errors->first('last_name') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="mail">Email</label>
        <input type="email" name="email" value="{{ @old('email') }}" class="form-control" id="mail">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="pass">Password</label>
        <input type="password" name="password" value="" class="form-control" id="pass">
        @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="username">Username</label>
        <input type="text" name="username" value="{{ @old('username') }}" class="form-control mb-5" id="username">
        @if ($errors->has('username'))
            <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
        </div>
    
        <div class="form-group">

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection