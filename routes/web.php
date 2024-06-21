<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::match(['get', 'post'], '/', [TaskController::class, 'index']);
Route::match(['get', 'post'], '/create', [TaskController::class, 'create']);
Route::match(['get', 'post'], '/edit/{id}', [TaskController::class, 'edit']);
Route::match(['get', 'post'], '/view/{id}', [TaskController::class, 'view']);
Route::match(['get', 'post'], '/delete/{id}', [TaskController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
