<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengenalanController;

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
    return view('v_home');
});
Route::view('/infosepeda','v_infosepeda');
Route::view('/sewa','v_sewa');
Route::view('/rekapsewa','v_rekapsewa');
Route::view('Tugas Web',[PengenalanController::class,'index'])->name('index');
Route::get('tugas1',[PengenalanController::class, 'tugas1'])->name('tugas1');
Route::get('tugas2',[PengenalanController::class, 'tugas2'])->name('tugas2');
