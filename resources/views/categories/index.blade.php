@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('categories.create')}}">Add new Category</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Category name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($categories->items() as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->category_name}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('categories.show', ['category' => $category->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('categories.edit', ['category' => $category->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection