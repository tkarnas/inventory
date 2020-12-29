@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Product details</h3>
    <img src="{{$product->image_url}}" alt="">
    <ul class="list-unstyled">
        <li>Product name: {{$product->product_name}} </li>
        <li>Serial: {{$product->serial_number}}</li>
        <li>IMEI: {{$product->imei}}</li>
        <li>Stock: {{$product->stock}}</li>
        <li>Price: {{$product->price}} HRK</li>
        <li>Brand: {{ $product->brand->brand_name }}</li>
        <li>Category: {{ $product->category->category_name }}</li>
    </ul>

    <a href="{{route('products.index')}}" class="btn btn-outline-danger">Back to products</a>
</div>
@endsection