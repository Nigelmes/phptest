<?php

use App\Http\Controllers\BookController;
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
Route::get('/book', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create']);
Route::get('/book/update', [BookController::class, 'update']);
