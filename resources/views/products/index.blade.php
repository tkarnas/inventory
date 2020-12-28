@extends('layouts.app')

@section('content')

<a class="btn btn-primary mt-5" href="{{route('products.create')}}">Add new product</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product name</th>
            <th scope="col">Brand</th>
            <th scope="col">Category</th>
            <th scope="col">Serial Number</th>
            <th scope="col">IMEI</th>
            <th scope="col">Stock</th>
            <th scope="col">Price</th>
            <th scope="col">Company</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products->items() as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->brand->brand_name }}</td>
            <td>{{ $product->category->category_name }}</td>
            <td>{{ $product->serial_number}}</td>
            <td>{{ $product->imei}}</td>
            <td>{{ $product->stock}}</td>
            <td>{{ $product->price}} HRK</td>
            <td>{{ $product->company->company_name}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('products.show', ['product' => $product->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('products.edit', ['product' => $product->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection