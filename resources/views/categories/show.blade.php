@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Categories details</h3>
    <ul class="list-unstyled">
        <li>Category name: {{$category->category_name}}</li>
    </ul>

    <a href="{{route('companies.index')}}" class="btn btn-outline-danger">Back to categories</a>
</div>
@endsection