<?php

use App\Http\Controllers\CofeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[CofeeController::class,'home'])->name('home');
Route::get('/about',[CofeeController::class,'about'])->name('about');
Route::get('/products',[CofeeController::class,'products'])->name('products');
Route::get('/store',[CofeeController::class,'store'])->name('store');
