@extends('layouts.app')

@section('content')
<div>
    <h3 class="mt-7">Company details</h3>
    <ul class="list-unstyled">
        <li>Company name: {{$company->company_name}}</li>
        <li>Vat number: {{$company->Vat_number}}</li>
        <li>Sector: {{$company->sector}}</li>
    </ul>

    <a href="{{route('companies.index')}}" class="btn btn-outline-danger">Back to companies</a>
</div>
@endsection