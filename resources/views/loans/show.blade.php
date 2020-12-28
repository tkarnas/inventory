@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Loan details</h3>
    <ul class="list-unstyled">
        <li>Start date: {{$loan->start_date_at}} </li>
        <li>End date: {{$loan->end_date_at}}</li>
        <li>Location: {{$loan->location}}</li>
        <li>User: {{$loan->user_id}}</li>
        <li>Products: {{$loan->product_id}}</li>
    </ul>

    <a href="{{route('loans.index')}}" class="btn btn-outline-danger">Back to Loans</a>
</div>
@endsection