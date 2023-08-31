<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('product.index');

Route::get('/products/create',[ProductController::class, 'create'])->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::put('/products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');


Route::resource('/orders', OrderController::class);

Route::resource('/category',CategoryController::class);
//php artisan route:list
//php artisan make:migration create_products_table
//php artisan make:model -r -c -s -f
