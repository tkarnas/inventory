@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')
<div>
    <h3 class="mt-7">Categories details</h3>
    <ul class="list-unstyled">
        <li>Category name: {{$category->category_name}}</li>
    </ul>

    <a href="{{route('categories.index')}}" class="btn btn-outline-danger">Back to categories</a>

    @if($loggedInUser->isAdmin())
    
    <form class="form-inline" action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
        <!-- CSRF token -->
        @csrf
        @method('DELETE')
        <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
    </form>
    @endif
</div>
@endsection