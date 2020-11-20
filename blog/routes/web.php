<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RajaController;
use App\Http\Controllers\RadaController;
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

Route::get('list', [RajaController::class,'show']);

Route::view('add', 'addrada');

Route::post('add', [RadaController::class, 'addData']);

Route::get('delete/{$id}', [RajaController::class, 'delete'])->name('delete');
Route::get('edit/{$id}', [RajaController::class, 'showData']);
