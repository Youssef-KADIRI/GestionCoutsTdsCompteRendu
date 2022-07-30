<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CourController;
use App\Http\Controllers\TdController;
use App\Http\Controllers\EleveController;

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

Route::get('cours', [CourController::class, 'index']);
Route::get('cours/create', [CourController::class, 'create']);
Route::post('cours', [CourController::class, 'store']);
Route::get('cours/{id}/edit', [CourController::class, 'edit']);
Route::put('cours/{id}', [CourController::class, 'update']);
Route::delete('cours/{id}', [CourController::class, 'destroy']);

Route::get('tds', [TdController::class, 'index']);
Route::get('tds/create', [TdController::class, 'create']);
Route::post('tds', [TdController::class, 'store']);
Route::get('tds/{id}/edit', [TdController::class, 'edit']);
Route::put('tds/{id}', [TdController::class, 'update']);
Route::delete('tds/{id}', [TdController::class, 'destroy']);

Route::get('elevesa', [EleveController::class, 'indexa']);
Route::get('elevesu', [EleveController::class, 'indexu']);
Route::get('eleves/create', [EleveController::class, 'create']);
Route::post('eleves', [EleveController::class, 'store']);
Route::get('eleves/{id}/edit', [EleveController::class, 'edit']);
Route::get('eleves/{id}', [EleveController::class, 'show']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
