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

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('companies.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection