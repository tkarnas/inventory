@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Brand details</h3>
    <ul class="list-unstyled">
        <li>Category name: {{$brand->brand_name}}</li>
    </ul>

    <a href="{{route('brands.index')}}" class="btn btn-outline-danger">Back to brands</a>
</div>
@endsection