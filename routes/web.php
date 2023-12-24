<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/products/index', [ProductsController::class, 'index'])->name('admin.products');
    Route::get('/products/categories/{id?}', [ProductsController::class, 'categories'])->name('admin.products.categories');
    Route::post('/products/categories/store', [ProductsController::class, 'store_category'])->name('admin.products.categories.store');
    Route::get('/products/new', [ProductsController::class, 'new'])->name('admin.products.new');
    Route::post('/products/store', [ProductsController::class, 'store'])->name('admin.products.store');
});