<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
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
Route::get('/admin', [Controller::class, 'admin']);
Route::get('/category', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categroy/create', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/show{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/category/edit/{category}', [CategoryController::class, 'edit'])->name('caterories.edit');
Route::patch('/category/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::post('/category/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('category-pdf', [CategoryController::class, 'CategoryPdf'])->name('categories.pdf');
Route::get('category-excel', [CategoryController::class, 'export'])->name('categories.excel');
Route::post('category-import', [CategoryController::class, 'import'])->name('categories.import');





// product
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
Route::get('/producgt/show/{product}', [ProductController::class, 'show'])->name('prodct.show');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product-trash', [ProductController::class, 'trash'])->name('product.trashed');
Route::get('/product-restore/{product}', [ProductController::class, 'restore'])->name('product.restore');
Route::delete('/product-delete/{product}', [ProductController::class, 'delete'])->name('product.delete');




// slider

Route::get('/slider', [SliderController::class, 'index'])->name('slider');

