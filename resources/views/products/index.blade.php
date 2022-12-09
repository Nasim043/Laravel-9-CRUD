@extends('layout')

@section('content')
<div class="row mt-3">
    <div class="col-lg-12 clearfix">
        <div class="float-start">
            <h2>Laravel 9 CRUD Application</h2>
        </div>
    </div>
    <div class="col-lg-12 mb-3 clearfix">
        <div class="float-end">
            <a class="btn btn-sm btn-primary" href="{{ route('products.create') }}"> Create New Product</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->details }}</td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection