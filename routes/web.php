<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PhonemodelController;
use App\Http\Controllers\PhoneController;

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

Route::get('/',[indexController:: class, 'index' ]);
Route::get('/brands',[BrandController:: class, 'indexBrand' ])->name('brands');
Route::get('/models',[PhonemodelController:: class, 'indexPhonemodel' ])->name('models');
Route::get('/phones',[PhoneController:: class, 'index' ])->name('phones');
Route::get('/phones/{id}',[PhoneController:: class, 'show' ])->name('show');