@extends('layouts.app')

@section('content')

<a class="btn btn-primary mt-5" href="{{route('invoices.create')}}">Add new Loan</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Date</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price Total</th>
            <th scope="col">Comapny</th>
            <th scope="col">Product</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($invoices->items() as $invoice)
        <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->invoice_date_at }}</td>
            <td>{{ $invoice->quantity }}</td>
            <td>{{ $invoice->price_total}}</td>
            <td>{{ $invoice->company_id}}</td>
            <td>{{ $invoice->product_id}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('invoices.show', ['invoice' => $invoice->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('invoices.edit', ['invoice' => $invoice->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection