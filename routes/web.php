<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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
Route::get('client', [ClientController::class, 'index']);
Route::post('client-store', [ClientController::class, 'store']);
Route::get('client-list', [ClientController::class, 'show']);

Route::get('index', [IndexController::class, 'index']);
// Route::resource('clients', ClientController::class)->only(['index', 'store', 'show', 'update', 'destroy']);
