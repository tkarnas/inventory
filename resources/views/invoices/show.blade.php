@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Loan details</h3>
    <ul class="list-unstyled">
        <li>Date: {{$invoice->invoice_date_at}} </li>
        <li>Quantity: {{$invoice->quantity}}</li>
        <li>Total price: {{$invoice->price_total}}</li>
        <li>Company: {{$invoice->company_id}}</li>
        <li>Products: {{$invoice->product_id}}</li>
    </ul>

    <a href="{{route('loans.index')}}" class="btn btn-outline-danger">Back to loans</a>
</div>
@endsection