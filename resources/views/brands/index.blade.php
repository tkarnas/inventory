@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('brands.create')}}">Add new Brand</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Brand name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($brands->items() as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->brand_name}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('brands.show', ['brand' => $brand->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('brands.edit', ['brand' => $brand->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection