@extends('layout')

@section('content')
<div class="row mt-3">
    <div class="col-lg-12 clearfix">
        <div class="float-start">
            <h2>Add New Product</h2>
        </div>
    </div>
    <div class="col-lg-12 clearfix">
        <div class="float-end">
            <a class="btn btn-sm btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    Please enter information correctly!!
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:100px" name="details" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection