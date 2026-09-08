@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $product['name'] }}</h2>
            <p class="card-text">Price: {{ $product['price'] }}</p>
            <p class="card-text">Stock: {{ $product['stock'] }}</p>
            <p class="card-text">Category: {{ $product['category'] }}</p>
            <p class="card-text">Prepared by: Francis Alkier Ubalde</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Product List</a>
        </div>
    </div>
@endsection