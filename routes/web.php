<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users_home', [\App\Http\Controllers\UserHomeController::class, 'index'])->name('user_home');



Route::get('/admin_home', [\App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin_home');
Route::get('/admin/category', [\App\Http\Controllers\CategoryConroller::class, 'index'])->name('category');
Route::get('/admin/category/create', [\App\Http\Controllers\CategoryConroller::class, 'create'])->name('category_create');
Route::post('/admin/category/create', [\App\Http\Controllers\CategoryConroller::class, 'store'])->name('category_store');
Route::delete('/admin/category/destroy/{category}', [\App\Http\Controllers\CategoryConroller::class, 'destroy'])->name('category_destroy');
Route::get('/admin/category/edit/{category}', [\App\Http\Controllers\CategoryConroller::class, 'edit'])->name('category_edit');
Route::patch('/admin/category/update/{category}', [\App\Http\Controllers\CategoryConroller::class, 'update'])->name('category_update');



Route::get('/admin/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('admin_product');
Route::get('/admin/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('admin_product_create');
Route::get('/admin/product/edit/{products}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('admin_product_edit');
Route::post('/admin/product/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('admin_product_store');
Route::patch('/admin/product/update/{products}', [\App\Http\Controllers\ProductController::class, 'update'])->name('admin_product_update');
Route::delete('/admin/product/delete/{products}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('admin_product_destroy');
