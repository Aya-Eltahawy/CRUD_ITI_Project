<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/articles', [ArticleController::class, 'index'])->name('index');
Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get("/articles/create",[ArticleController::class,"create"]);
Route::post("/articles",[ArticleController::class,"store"]);
Route::get("/articles/{id}/edit",[ArticleController::class,"edit"]);
Route::put("/articles/{id}",[ArticleController::class,"update"]);
Route::delete('article/{id}',[ArticleController::class,'destroy']);
