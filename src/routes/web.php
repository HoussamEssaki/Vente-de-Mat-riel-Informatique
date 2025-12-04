<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
})->name('client.index');

Route::get('/catalog', function () {
    return view('client.catalog', ['title' => 'Product Catalog - TechNexus']);
})->name('client.catalog');

Route::get('/product-details', function () {
    return view('client.product_details', ['title' => 'Product details - TechNexus']);
})->name('client.product_details');

Route::get('/cart', function () {
    return view('client.shopping_cart', ['title' => 'Shopping Cart - TechNexus']);
})->name('client.shopping_cart');
