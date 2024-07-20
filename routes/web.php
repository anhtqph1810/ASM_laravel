<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoaiTinController;
use App\Http\Controllers\TinTucController;
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

// Route::get('/', function () {
//     return view('client.index');
// });

Route::get('/test', [LoaiTinController::class, 'index']);
Route::get('/tin-tuc/{id}', [TinTucController::class, 'show'])->name('tin_tuc.show');
