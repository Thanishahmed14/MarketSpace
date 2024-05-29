<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/view_product_page',[HomeController::class,'view_product_page']);

Route::get('/view_order_page',[HomeController::class,'view_order_page']);



Route::get('/dashboard',[HomeController::class,'redirect']);

Route::get('/dashboard2',[HomeController::class,'dashboard2'])->name('dashboard2');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

});

Route::get('/redirect',[HomeController::class,'redirect']);

Route::get('/logout',[HomeController::class,'logoutUser']);

Route::get('/product_details/{id}',[HomeController::class,'product_details']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::get('/show_cart',[HomeController::class,'show_cart']);

Route::get('/cash_order',[HomeController::class,'cash_order']);

Route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');



Route::get('/show_order', [AdminController::class, 'show_order']);

Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);



Route::get('/search2', [AdminController::class, 'searchdata2']);

Route::get('/searchdata3', [AdminController::class, 'searchdata3']);

Route::get('/delete_cart/{id}',[HomeController::class,'delete_cart']);
