<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
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

Route::get('/products', [ListaController::class, 'index'])->name('products.index');


Route::get('/products/create', [ListaController::class, 'create'])->name('products.create');

Route::post('/products/store', [ListaController::class, 'store'])->name('products.store');
