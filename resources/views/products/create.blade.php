@extends('layouts.app')

@section('content')
<div class="col-sm-5 mx-auto">
    <form class="pt-5" action="{{ route('products.store')}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        <!-- Brand name -->

        <div class="form-group">

        <label for="product">Product name</label>
        <input type="text" name="product_name" value="{{ @old('product_name') }}" class="form-control" id="product">
        @if ($errors->has('product_name'))
            <span class="text-danger">{{ $errors->first('product_name') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="company">Company ID</label>
        <input type="number" name="company_id" value="{{ @old('company_id') }}" class="form-control mb-5" id="company">
        @if ($errors->has('company_id'))
            <span class="text-danger">{{ $errors->first('company_id') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="category">Category ID</label>
        <input type="number" name="category_id" value="{{ @old('category_id') }}" class="form-control mb-5" id="category">
        @if ($errors->has('category_id'))
            <span class="text-danger">{{ $errors->first('category_id') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="qty">Qty</label>
        <input type="number" name="stock" value="{{ @old('stock') }}" class="form-control" id="qty">
        @if ($errors->has('stock'))
            <span class="text-danger">{{ $errors->first('stock') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="price">Price</label>
        <input type="number" name="price" value="{{ @old('price') }}" class="form-control" id="price">
        @if ($errors->has('price'))
            <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="image">Image URL</label>
        <input type="text" name="image_url" value="{{ @old('image_url') }}" class="form-control" id="image">
        @if ($errors->has('image_url'))
            <span class="text-danger">{{ $errors->first('image_url') }}</span>
        @endif
        </div>
        <div class="form-group">

        <label for="brand">Brand ID</label>
        <input type="number" name="brand_id" value="{{ @old('brand_id') }}" class="form-control mb-5" id="brand">
        @if ($errors->has('brand_id'))
            <span class="text-danger">{{ $errors->first('brand_id') }}</span>
        @endif
        </div>
      
        <div class="form-group">

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('products.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection