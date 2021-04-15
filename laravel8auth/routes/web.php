<?php

use App\Http\Controllers\AnduriController;
use App\Http\Controllers\DynamicDependent;
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

/* Avaleht */
Route::get('/', function () {
    $data = Raja::all();
    return view('welcome', ['rajad'=>$data]);

});
/* */


/* Login dashboard */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* */


/* Radade liitmine anduriga */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/rajad/liitmine/{id}', [RajaController::class,'lisa'])->name('lisaandur');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/rajad/liitmine/', [RajaController::class,'attach']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/rajad/liitmine', [DynamicDependent::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/rajad', function () {
    $data = Raja::all();
    return view('rajad', ['rajad'=>$data]);
})->name('rajad');

/* */


/* Raja lisamine */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/addrada', function () {
    return view('addrada');

})->name('addrada');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/addrada', [RadaController::class, 'addData']);

/* */


/* Raja tegevused */

Route::get('dashboard/rajad/delete/{id}', [MemberController::class,'delete']);

Route::get('dashboard/rajad/edit/{id}', [MemberController::class,'showData']);

Route::post('dashboard/rajad/edit/', [MemberController::class, 'update']);

/* */


/* Anduri lisamine  */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/andurilisa', function () {
    return view('andurilisa');
})->name('addandur');

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/andurilisa', [AnduriController::class, 'addAndur']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/andur', [AnduriController::class, 'show'])->name('andur');

/* */


/* Anduri tegevused */

Route::get('dashboard/delete/{id}', [AnduriController::class,'delete']);

Route::get('dashboard/editandur/{id}', [AnduriController::class,'showData']);

Route::get('dashboard/editandur/', [AnduriController::class,'update']);

/* */ 


/* Alamlehed */

Route::get('kaamerad', [Kaamerad::class,'leht']);

Route::get('andurid', [AnduriController::class,'show2']);

Route::get('rada', function(){
    $data = Raja::all();
    return view('rada', ['rajad'=>$data]);
});

Route::get('radade/{id}', [RajaController::class,'raja']);

Route::get('radade/', [DynamicDependent::class,'rajad']);

/* */

