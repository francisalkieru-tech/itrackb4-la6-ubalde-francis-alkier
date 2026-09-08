<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Filter</title>
</head>
<body>
    <h1>Product List</h1>
    <p>@if($activeCategory)
        Showing category: {{ $activeCategory}}
        @else
        Showing all products
        @endif
    </p>

    <table border="1" cellpadding="8">
        <tr><th>Name</th> <th>Price</th> <th>Stock</th> <th>Category</th></tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td>{{ $product['stock'] }}</td>
            <td>{{ $product['category'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('products.index')}}">Back to Product List</a>
</body>
</html>