@extends('layouts.app')

@section('content')
<a class="btn btn-primary mt-5" href="{{route('companies.create')}}">Add new Company</a>
<table class="table mt-3">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Company name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($companies->items() as $company)
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->company_name}}</td>
            <td>
                <a class="btn btn-outline-dark" href="{{ route('companies.show', ['company' => $company->id])}}">Details</a>
                <a class="btn btn-outline-dark" href="{{ route('companies.edit', ['company' => $company->id])}}">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection