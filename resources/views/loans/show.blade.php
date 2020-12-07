@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Product details</h3>
    <ul class="list-unstyled">
        <li>Product name: {{$loan->start_date_at}} </li>
        <li>Serial: {{$loan->end_date_at}}</li>
        <li>IMEI: {{$loan->location}}</li>
        <li>Stock: {{$loan->user_id}}</li>
        <li>Price: {{$loan->product_id}} HRK</li>
    </ul>

    <a href="{{route('products.index')}}" class="btn btn-outline-danger">Back to products</a>
</div>
@endsection