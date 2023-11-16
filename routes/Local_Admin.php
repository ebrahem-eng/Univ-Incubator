<?php

use App\Http\Controllers\LAdmin\Auth\AuthController;
use App\Http\Controllers\LAdmin\LAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Local Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Local Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Local Admin" middleware group. Make something great!
|
*/


Route::get('/ladmin', [LAdminController::class, 'index'])->middleware(['ladmin'])->name('ladmin.index');

//=================================Auth route Section==========================

Route::get('ladmin/login', [AuthController::class, 'index'])->name('ladmin.show.login');
Route::post('ladmin/login/store', [AuthController::class, 'store'])->name('ladmin.store.login');
Route::post('ladmin/logout', [AuthController::class, 'logout'])->name('ladmin.logout');

//===============================End Auth Section ===============================
