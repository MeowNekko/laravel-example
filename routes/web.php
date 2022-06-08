<?php

use App\Http\Controllers\AuthController;
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
    return view('pages.welcome');
})->name('home');

Route::get('/open', function () {
    return view('pages.open');
})->name('open');

Route::get('/close', function () {
    return view('pages.close');
})->name('close');

Route::get('/account/login', [AuthController::class, 'index'])->name('account/login');
Route::post('/account/authorization', [AuthController::class, 'authorization'])->name('account/authorization');
Route::get('/account/logout', [AuthController::class, 'logout'])->name('account/logout');
