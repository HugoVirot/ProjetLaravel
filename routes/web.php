<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// afficher formulaire modif
Route::get('user/update', [App\Http\Controllers\User\UserController::class, 'showUpdatePage'])->name('user.update');

// valider les modifs
Route::put('user/update', [App\Http\Controllers\User\UserController::class, 'update'])->name('user.update');
