@extends('layouts.app')

@section('content')
<div class="mt-7 col-sm-5 mx-auto">
    <form action="{{ route('brands.update', ['brand' => $brand->id])}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        @method('PUT')
        <!-- Brand name -->

        <div class="form-group">
        <label for="name">Brand name</label>
        <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control" id="name">
        @if ($errors->has('brand_name'))
            <span class="text-danger">{{ $errors->first('brand_name') }}</span>
        @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('brands.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection