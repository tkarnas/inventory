@extends('layouts.app')

@section('content')
<div class="col-sm-5 mx-auto">
    <form class="pt-5" action="{{ route('loans.update', ['loan' => $loan->id]) }}" method="POST">
        <!-- CSRF Token-->
        @csrf
        @method('PUT')
        <!-- Brand name -->

        <div class="form-group">
        <label for="start_date_at">Start date</label>
        <input type="date" name="start_date_at" value="{{ $loan->start_date_at }}" class="form-control" id="start_date_at">
        @if ($errors->has('start_date_at'))
            <span class="text-danger">{{ $errors->first('start_date_at') }}</span>
        @endif
        </div>

        <div class="form-group">
        <label for="end_date_at">End date</label>
        <input type="date" name="end_date_at" value="{{ $loan->end_date_at }}" class="form-control" id="end_date_at">
        @if ($errors->has('end_date_at'))
            <span class="text-danger">{{ $errors->first('end_date_at') }}</span>
        @endif
        </div>
        <div class="form-group">
        <label for="location">Location</label>
        <input type="text" name="location" value="{{ $loan->location }}" class="form-control" id="location">
        @if ($errors->has('location'))
            <span class="text-danger">{{ $errors->first('location') }}</span>
        @endif
        </div>
        <div class="form-group">
        <label for="user_id">User ID</label>
        {{ Form::select('user_id', $users , $loan->user_id, ['class' => 'form-control', 'id' => 'user_id']) }}
        </div>
        <div class="form-group">    
        <label for="product_id">Product ID</label>
        {{ Form::select('product_id', $products , $loan->product_id, ['class' => 'form-control', 'id' => 'product_id']) }}
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('loans.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection