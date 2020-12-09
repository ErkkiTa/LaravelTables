<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RadaController;
use App\Http\Controllers\RajaController;
use App\Models\Raja;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/rajad', function () {
    $data = Raja::all();
    return view('rajad', ['rajad'=>$data]);
})->name('rajad');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/addrada', function () {
    return view('addrada');
     
})->name('addrada');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/addrada', [RadaController::class, 'addData']);

//Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/delete/{id}', [MemberController::class, 'delete']);
Route::get('dashboard/rajad/delete/{id}', [MemberController::class,'delete']);

Route::get('dashboard/rajad/edit/{id}', [MemberController::class,'showData']);

Route::post('dashboard/rajad/edit/', [MemberController::class, 'update']);




