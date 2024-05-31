<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoggerMiddleWare;

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

Route::group(array('prefix' => 'admin'), function () {
    Route::resource('todo', TodoController::class)->middleware(["auth", LoggerMiddleware::class]);
    Route::get('category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index')->middleware("auth");
});

Auth::routes();
