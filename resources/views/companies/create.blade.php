@extends('layouts.app')

@section('content')
<div class="mt-7 col-sm-5 mx-auto">
    <form action="{{ route('companies.store')}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        <!-- Brand name -->

        <div class="form-group">
        <label for="name">Company name</label>
        <input type="text" name="company_name" value="{{ @old('company_name') }}" class="form-control" id="name">
        @if ($errors->has('company_name'))
            <span class="text-danger">{{ $errors->first('company_name') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="vat">Vat number</label>
        <input type="number" name="Vat_number" value="{{ @old('Vat_number') }}" class="form-control" id="vat">
        @if ($errors->has('Vat_number'))
            <span class="text-danger">{{ $errors->first('Vat_number') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="sec">Sector</label>
        <input type="text" name="vat_number" value="{{ @old('sector') }}" class="form-control" id="sec">
        @if ($errors->has('sector'))
            <span class="text-danger">{{ $errors->first('sector') }}</span>
        @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('companies.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection