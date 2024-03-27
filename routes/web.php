<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class , 'index'])->name('product.index');
Route::get('/new-product',[ProductController::class , 'productCreate'])->name('productCreate');

Route::post('/product-store',[ProductController::class , 'productStore'])->name('productStore');//data create

Route::get('/product/{id}/edit',[ProductController::class , 'productEdit']);//get data by Id

Route::post('/product/{id}/update',[ProductController::class , 'productUpdate']);//data update
