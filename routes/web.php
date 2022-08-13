<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return redirect('/products');
});

//Route::get('/products', [ProductController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('products', ProductController::class);
});

//Route::resource('products', ProductController::class);
