@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')
<div>
    <h3 class="mt-7">Company details</h3>
    <ul class="list-unstyled">
        <li>Company name: {{$company->company_name}}</li>
        <li>Vat number: {{$company->Vat_number}}</li>
        <li>Sector: {{$company->sector}}</li>
    </ul>

    <a href="{{route('companies.index')}}" class="btn btn-outline-danger">Back to companies</a>

    @if($loggedInUser->isAdmin())
    
    <form class="form-inline" action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="POST">
        <!-- CSRF token -->
        @csrf
        @method('DELETE')
        <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
    </form>
    @endif
</div>
@endsection