@extends('layouts.app')

@section('content')
<div class="col-sm-5 mx-auto">
    <form class="pt-5" action="{{ route('users.update', ['user' => $user->id])}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        @method('PUT')
        <!-- Brand name -->

        <div class="form-group">

        <label for="first">First name</label>
        <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" id="first">
        @if ($errors->has('first_name'))
            <span class="text-danger">{{ $errors->first('first_name') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="last">Last name</label>
        <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" id="last">
        @if ($errors->has('last_name'))
            <span class="text-danger">{{ $errors->first('last_name') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="mail">Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="mail">
        @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="username">Username</label>
        <input type="text" name="username" value="{{ $user->username }}" class="form-control mb-5" id="username">
        @if ($errors->has('username'))
            <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="role">Role</label>
        {{ Form::select('role_id', $roles , $user->role_id, ['class' => 'form-control', 'id' => 'role']) }}
        </div>
        <div class="form-group">

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection