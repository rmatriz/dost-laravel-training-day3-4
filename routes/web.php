<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\API\APIProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');


Route::prefix('categories')->group(function() {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/viewproducts', [CategoryController::class, 'showProducts'])->name('categories.showProducts');
    Route::get('/viewcategory/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/save', [CategoryController::class, 'store'])->name('categories.save');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');
});


Route::prefix('products')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/viewcategory', [ProductController::class, 'showCategory'])->name('products.showCategory');
    Route::get('/viewproduct/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/save', [ProductController::class, 'store'])->name('products.save');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/{id}/delete', [ProductController::class, 'delete'])->name('products.delete');

    Route::get('/vue-products', [ProductController::class, 'vueproductapp'])->name('products.vueproducts');

    Route::prefix('/api')->group(function() {
        Route::get('/', [APIProductController::class, 'index'])->name('api.index');
    });
});



