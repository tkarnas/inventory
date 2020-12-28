@extends('layouts.app')

@section('content')

<a class="btn btn-primary mt-5" href="{{route('loans.create')}}">Add new Loan</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            <th scope="col">Location</th>
            <th scope="col">User</th>
            <th scope="col">Product</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($loans->items() as $loan)
        <tr>
            <td>{{ $loan->id }}</td>
            <td>{{ $loan->start_date_at }}</td>
            <td>{{ $loan->end_date_at}}</td>
            <td>{{ $loan->location}}</td>
            <td>{{ $loan->user_id}}</td>
            <td>{{ $loan->product_id}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('loans.show', ['loan' => $loan->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('loans.edit', ['loan' => $loan->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection