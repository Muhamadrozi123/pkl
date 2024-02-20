<?php

use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PklController;
use App\Http\Controllers\DudiController;
use App\Http\Controllers\SiswaController;

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

route::resource('siswa',SiswaController::class);
route::resource('dudi',DudiController::class);
route::resource('pkl',PklController::class);
