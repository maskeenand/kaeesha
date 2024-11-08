<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index']);

    Route::get('/suratmasuk',[\App\Http\Controllers\SuratMasukController::class,'index']);
    Route::post('/suratmasuk',[\App\Http\Controllers\SuratMasukController::class,'store']);
    Route::get('/suratmasuk/create',[\App\Http\Controllers\SuratMasukController::class,'create']);
    Route::get('/suratmasuk/{id}/edit',[\App\Http\Controllers\SuratMasukController::class,'edit']);
    Route::put('/suratmasuk/{id}',[\App\Http\Controllers\SuratMasukController::class,'update']);
    Route::delete('/suratmasuk/{id}',[\App\Http\Controllers\SuratMasukController::class,'destroy']);
    Route::get('/suratmasuk/search',[\App\Http\Controllers\SuratMasukController::class,'search']);

    Route::get('/suratkeluar',[\App\Http\Controllers\SuratKeluarController::class,'index']);
    Route::post('/suratkeluar',[\App\Http\Controllers\SuratKeluarController::class,'store']);
    Route::get('/suratkeluar/{id}/edit',[\App\Http\Controllers\SuratKeluarController::class,'edit']);
    Route::put('/suratkeluar/{id}',[\App\Http\Controllers\SuratKeluarController::class,'update']);
    Route::delete('/suratkeluar/{id}',[\App\Http\Controllers\SuratKeluarController::class,'destroy']);

    Route::get('/pks',[\App\Http\Controllers\PksController::class,'index']);
    Route::post('/pks',[\App\Http\Controllers\PksController::class,'store']);
    Route::get('/pks/{id}/edit',[\App\Http\Controllers\PksController::class,'edit']);
    Route::put('/pks/{id}',[\App\Http\Controllers\PksController::class,'update']);
    Route::delete('/pks/{id}',[\App\Http\Controllers\PksController::class,'destroy']);

    Route::get('/pedoman',[\App\Http\Controllers\PedomanController::class,'index']);
    Route::post('/pedoman',[\App\Http\Controllers\PedomanController::class,'store']);
    // Route::post('/pedoman',[\App\Http\Controllers\PedomanController::class,'store']);

    Route::get('/notulen',[\App\Http\Controllers\NotulenController::class,'index']);
    Route::post('/notulen',[\App\Http\Controllers\NotulenController::class,'store']);


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
