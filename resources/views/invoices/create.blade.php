@extends('layouts.app')

@section('content')
<div class="col-sm-5 mx-auto">
    <form class="pt-5" action="{{ route('invoices.store')}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        <!-- Brand name -->

        <div class="form-group">

        <label for="name">Quantity</label>
        <input type="number" name="quantity" value="{{ @old('quantity') }}" class="form-control" id="name">
        @if ($errors->has('quantity'))
            <span class="text-danger">{{ $errors->first('quantity') }}</span>
        @endif

        <label for="name">Total price</label>
        <input type="number" name="price_total" value="{{ @old('price_total') }}" class="form-control" id="name">
        @if ($errors->has('price_total'))
            <span class="text-danger">{{ $errors->first('price_total') }}</span>
        @endif

        <label for="name">Company ID</label>
        <input type="number" name="company_id" value="{{ @old('company_id') }}" class="form-control" id="name">
        @if ($errors->has('company_id'))
            <span class="text-danger">{{ $errors->first('company_id') }}</span>
        @endif

        <label for="name">Product ID</label>
        <input type="number" name="product_id" value="{{ @old('product_id') }}" class="form-control mb-5" id="name">
        @if ($errors->has('product_id'))
            <span class="text-danger">{{ $errors->first('product_id') }}</span>
        @endif

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('invoices.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection