<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/whoami', function () {
    return 'Francis Alkier M. Ubalde | 2023-70377 | Block 4c | ITRACKB4 Laravel 12';
});

Route::get('/products/featured', function(){
    return redirect()->route('products.show', 5);
}) -> name('products.featured');

Route::get('/products/filter/{category?}', [ProductController::class, 'filter'])->name('products.filter');

Route::resource('products', ProductController::class) -> only('index', 'show');