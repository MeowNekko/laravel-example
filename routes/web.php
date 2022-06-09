<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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

Route::get('/404', function () {
    return view('pages.404');
})->name('404');

Route::get('/{id}', [PageController::class, 'index']);

Route::get('/account/login', [AuthController::class, 'index'])->name('account/login');
Route::post('/account/authorization', [AuthController::class, 'authorization'])->name('account/authorization');
Route::get('/account/logout', [AuthController::class, 'logout'])->name('account/logout');
