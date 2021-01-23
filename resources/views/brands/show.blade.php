@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')
<div>
    <h3 class="mt-7">Brand details</h3>
    <ul class="list-unstyled">
        <li>Category name: {{$brand->brand_name}}</li>
    </ul>

    <a href="{{route('brands.index')}}" class="btn btn-outline-danger">Back to brands</a>

    @if($loggedInUser->isAdmin())
    
    <form class="form-inline" action="{{ route('brands.destroy', ['brand' => $brand->id]) }}" method="POST">
        <!-- CSRF token -->
        @csrf
        @method('DELETE')
        <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
    </form>
    @endif
</div>
@endsection