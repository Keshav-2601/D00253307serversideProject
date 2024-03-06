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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[ProductController::class,'index'])->name('Product.index');
Route::get('/products/addnewblog',[ProductController::class,'Newblog'])->name('Product.Addnewblog');
Route::post('/products',[ProductController::class,'store'])->name('Product.store');
Route::get('/products/updateblog',[ProductController::class,'update'])->name('Product.update');
Route::get('/products/updateuser',[ProductController::class,updateUser])->name('product.updateuser');