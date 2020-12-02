@extends('layouts.app')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product name</th>
            <th scope="col">Serial Number</th>
            <th scope="col">IMEI</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products->items() as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->serial_number}}</td>
            <td>{{ $product->imei}}</td>
            <td>{{ $product->stock}}</td>
            <td>{{ $product->price}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection