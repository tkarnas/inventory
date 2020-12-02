@extends('layouts.app')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Ime kategorije</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($categories->items() as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->category_name}}</td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection