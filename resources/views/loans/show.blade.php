@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Loan details</h3>
    <ul class="list-unstyled">
        <li>Start date: {{$loan->start_date_at}} </li>
        <li>End date: {{$loan->end_date_at}}</li>
        <li>Location: {{$loan->location}}</li>
        <li>User: {{$loan->user->first_name}} {{$loan->user->last_name}}</li>
        <li>Products: {{$loan->product->product_name}}
        <br>IMEI: {{$loan->product->IMEI}}
        <br>Serial: {{$loan->product->serial_number}}
        <br>Price: {{$loan->product->price}} HRK
        </li>
    </ul>

    <a href="{{route('loans.index')}}" class="btn btn-outline-danger">Back to Loans</a>
</div>
@endsection