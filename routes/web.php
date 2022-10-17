<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

<<<<<<< HEAD
Route::get('/mahasiswas',[MahasiswaController::class, 'index'])->name('mahasiswas.index');

//menuju mahasiswa/store, dengan function store untuk memasukan data
Route::post('/mahasiswas/store',[MahasiswaController::class, 'store'])->name('mahasiswas.store');
=======
Route::controller(MahasiswaController::class)-> group(function (){
    Route::get('/mahasiswas','index')->name('mahasiswas.index');

    Route::post('/mahasiswas/store','store')->name('mahasiswas.store');
    
    Route::get('/mahasiswas/view/{id}','view')->name('mahasiswas.view');
    
    Route::put('/mahasiswas/update/{id}','update')->name('mahasiswas.update');
    
    Route::delete('/mahasiswas/delete/{id}','deleted')->name('mahasiswas.delete');
});
>>>>>>> 5f2c9e4c770ad4174878d37215b618b38cfc6ef3
