<?php

use App\Http\Controllers\AnduriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RadaController;
use App\Http\Controllers\RajaController;
use App\Models\Raja;
use App\Http\Controllers\Kaamerad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Anduri;


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
    $data = Anduri::all();
    return view('welcome', ['andurid'=>$data]);
    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/rajad', function () {
    $data = Raja::all();
    return view('rajad', ['rajad'=>$data]);
})->name('rajad');

Route::get('rada', function(){
    $data = Raja::all();
    return view('rada', ['rajad'=>$data]);
});

Route::get('kaamerad', [Kaamerad::class,'leht']);

Route::get('andurid', [AnduriController::class,'show2']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/addrada', function () {
    return view('addrada');
     
})->name('addrada');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/addrada', [RadaController::class, 'addData']);

Route::get('dashboard/rajad/delete/{id}', [MemberController::class,'delete']);

Route::get('dashboard/rajad/edit/{id}', [MemberController::class,'showData']);

Route::post('dashboard/rajad/edit/', [MemberController::class, 'update']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/andurilisa', function () {
    return view('andurilisa');
})->name('addandur');


Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/andurilisa', [AnduriController::class, 'addAndur']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/andur', [AnduriController::class, 'show'])->name('andur');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/andur/delete/{id}', [AnduriController::class, 'delete']);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/andur/edit/{id}', [AnduriController::class, 'update']);
Route::post('dashboard/andur/editandur/', [AnduriController::class, 'update']);
Route::get('dashboard/andur/editandur/{id}', [AnduriController::class, 'showData']);

