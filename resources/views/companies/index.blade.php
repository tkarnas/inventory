@extends('layouts.app')

@section('content')
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Ime kompanije koja je isporučila robu</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($companies->items() as $company)
        <tr>
            <td>{{ $company->id }}</td>
            <td>{{ $company->company_name}}</td>

        </tr>
        @endforeach

    </tbody>
</table>
@endsection