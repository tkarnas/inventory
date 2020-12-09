@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('users.create')}}">Add new user</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users->items() as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->first_name}}</td>
            <td>{{ $user->last_name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->username}}</td>
            <td>{{ $user->role_id}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('users.show', ['user' => $user->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('users.edit', ['user' => $user->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection