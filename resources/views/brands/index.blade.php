@extends('layouts.app')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Ime brenda</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($brands->items() as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->brand_name}}</td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection