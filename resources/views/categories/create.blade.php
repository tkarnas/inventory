@extends('layouts.app')

@section('content')
<div class="mt-7 col-sm-5 mx-auto">
    <form action="{{ route('categories.store')}}" method="POST">
        <!-- CSRF Token-->
        @csrf
        <!-- Brand name -->

        <div class="form-group">
        <label for="name">Category name</label>
        <input type="text" name="category_name" value="{{ @old('category_name') }}" class="form-control" id="name">
        @if ($errors->has('category_name'))
            <span class="text-danger">{{ $errors->first('category_name') }}</span>
        @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('categories.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection