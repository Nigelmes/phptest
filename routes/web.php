<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AvtorController;
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

//Route::get('/admin', function () {
//    return view('admin', 'BookController');
//});
Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create']);
Route::post('/book', [BookController::class, 'store'])->name('book.store');

Route::get('/avtor', [AvtorController::class, 'index'])->name('avtor.index');
Route::get('/avtor/create', [AvtorController::class, 'create']);
Route::post('/avtor', [AvtorController::class, 'store'])->name('avtor.store');
