<nav class="mb-3">
    <a class="btn {{ request()->is('products*') ? 'btn-primary' : '' }}" href="{{ route('products.index') }}">Product List</a>
    <a class="btn {{ request()->is('products/1*') ? 'btn-primary' : '' }}"href="{{ route('products.show', 1) }}">Store Product</a>
</nav>