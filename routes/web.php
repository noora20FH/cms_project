<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('articles',ArticleController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\ArticleController::class, 'index'])->name('home');
Route::get('/article/print_pdf',[ArticleController::class,'print_pdf'])->name('print_pdf');
