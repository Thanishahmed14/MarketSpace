<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('view_add_product',[ProductController::class,'index'])->name('view_add_product');

Route::get('view_category',[CategoryController::class,'index'])->name('view_category');

Route::post('add-category',[CategoryController::class,'store'])->name('add-category');

Route::get('delete-category/{id}',[CategoryController::class,'destroy'])->name('delete-category');

Route::get('view-add-product',[ProductController::class,'index'])->name('view-add-product');

Route::get('view-show-product',[ProductController::class,'show'])->name('view-show-product');

Route::post('add-product',[ProductController::class,'store'])->name('add-product');

Route::get('view-update-product/{id}',[ProductController::class,'view_update_product'])->name('view-update-product');

Route::post('update-product/{id}',[ProductController::class,'update'])->name('update-product');

Route::post('update-product-image/{id}',[ProductController::class,'update_image'])->name('update-product-image');

Route::get('delete-product/{id}',[ProductController::class,'destroy'])->name('delete-product');
