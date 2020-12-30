@extends('layouts.app')

@section('content')
<div class="col-sm-5 mx-auto">
    <form class="pt-5" action="{{ route('invoices.update', ['invoice' => $invoice->id])}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        @method('PUT')
        <!-- Brand name -->

        <div class="form-group">
        <label for="qty">Quantity</label>
        <input type="number" name="quantity" value="{{ $invoice->quantity }}" class="form-control" id="qty">
        @if ($errors->has('quantity'))
            <span class="text-danger">{{ $errors->first('quantity') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="price">Total price</label>
        <input type="number" name="price_total" value="{{ $invoice->price_total }}" class="form-control" id="price">
        @if ($errors->has('price_total'))
            <span class="text-danger">{{ $errors->first('price_total') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="company">Company ID</label>
        {{ Form::select('company_id', $companies , $invoice->company_id, ['class' => 'form-control', 'id' => 'company']) }} 
        </div>

        <div class="form-group">
        <label for="product">Product ID</label>
        {{ Form::select('product_id', $products , $invoice->product_id, ['class' => 'form-control', 'id' => 'product']) }}
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('invoices.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection