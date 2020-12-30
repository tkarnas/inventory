@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">User details</h3>
    <ul class="list-unstyled">
        <li>First Name: {{$user->first_name}}</li>
        <li>Last Name: {{$user->last_name}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Username: {{$user->username}}</li>
        <li>Role: {{$user->role_id}}</li>
    </ul>

    <a href="{{route('users.index')}}" class="btn btn-outline-warning">Back to users</a>
    
</div>
@endsection