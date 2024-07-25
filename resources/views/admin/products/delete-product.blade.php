@extends('layouts.app')

@section('content')
    {{-- For debugging --}}
    {{ dd($product) }}

    <div class="container">
        <h1>Delete Product</h1>
        <p>Are you sure you want to delete this product?</p>

        <form action="{{ route('products.destroy', $product->prodID) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
