@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')
<div>
    <h3 class="mt-7">User details</h3>
    <ul class="list-unstyled">
        <li>First Name: {{$user->first_name}}</li>
        <li>Last Name: {{$user->last_name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Username: {{$user->username}}</li>
        <li>Role: {{$user->role->role_name}}</li>
    </ul>

    
    <div class="btn-group mt-5" role="group">
        <a class="btn btn-secondary mr-3" href="{{ route('users.index') }}">Back</a>

        <!-- admin svima mijenja password, korisnik samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <a class="btn btn-primary mr-3" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>
        @endif

        <!-- admin svima deaktivira račun, korisnik može samo sebi -->
        @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Deactivate</button>
        </form>
        @endif
    </div>

</div>
@endsection