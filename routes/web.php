<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MenuController;

use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'index'])->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/page/{id?}', [PublicController::class, 'menuPage'])->name('page');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/products/index/{id?}', [ProductsController::class, 'index'])->name('admin.products');
    Route::get('/products/categories/{id?}', [ProductsController::class, 'categories'])->name('admin.products.categories');
    Route::post('/products/categories/store', [ProductsController::class, 'store_category'])->name('admin.products.categories.store');
    Route::get('/products/new', [ProductsController::class, 'new'])->name('admin.products.new');
    Route::post('/products/store', [ProductsController::class, 'store'])->name('admin.products.store');

    Route::get('/posts/categories/{id?}', [PostController::class, 'categories'])->name('admin.posts.categories');
    Route::post('/posts/categories/store', [PostController::class, 'store_category'])->name('admin.posts.categories.store');

    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('/posts/new', [PostController::class, 'new'])->name('admin.posts.new');
    Route::post('/posts/store', [PostController::class, 'store'])->name('admin.post.store');

    Route::get('/menus/main', [MenuController::class, 'main'])->name('admin.menus.main');
    Route::post('/menus/store_main', [MenuController::class, 'store_main'])->name('admin.menus.main.store');
});