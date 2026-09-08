@extends('layouts.app')

@section('title', 'Store Product List')

@section('content')
<h3>My Product List</h3>
<p>Prepared by: Francis Alkier Ubalde</p>

<table class="table table-striped table-bordered">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Category</th>
    </tr>
    @forelse ($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td><a href="{{ route('products.show', $product['id']) }}"> {{ $product['name'] }}</a></td>
        <td>{{ $product['price'] }}</td>
        <td>
            @if ($product['stock'] < 10)
                <p>{{ $product['stock'] }} (Low Stock)</p>
            @else
                {{ $product['stock'] }}
            @endif
        </td>
        <td>{{ $product['category'] }}</td>
    </tr>
    @empty
    <tr><td colspan="5">No products are available.</td></tr>
    @endforelse
</table>
@endsection