<?php

use App\Http\Controllers\GAdmin\Auth\AuthController;
use App\Http\Controllers\GAdmin\GAdminController;
use App\Http\Controllers\GAdmin\University\UniversityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Global Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Global Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Global Admin" middleware group. Make something great!
|
*/

Route::get('/gadmin', [GAdminController::class, 'index'])->middleware(['gadmin'])->name('gadmin.index');
//=================================Auth route Section==========================

Route::get('gadmin/login', [AuthController::class, 'index'])->name('gadmin.show.login');

Route::post('gadmin/store/login', [AuthController::class, 'store'])->name('gadmin.store.login');

Route::post('gadmin/logout', [AuthController::class, 'logout'])->name('gadmin.logout');

//===============================End Auth Section ===============================

Route::middleware(['gadmin'])->name('gadmin.')->prefix('gadmin')->group(function(){

    //=================================University route Section==========================

    Route::get('/university/index', [UniversityController::class, 'index'])->name('university.index');

    Route::get('/university/create', [UniversityController::class, 'create'])->name('university.create');

    Route::post('/university/store', [UniversityController::class, 'store'])->name('university.store');

    Route::get('/university/edit/{id}', [UniversityController::class, 'edit'])->name('university.edit');

    Route::put('/university/update/{id}', [UniversityController::class, 'update'])->name('university.update');

    Route::get('/university/archive', [UniversityController::class, 'archive'])->name('university.archive');

    Route::delete('/university/softDelete/{id}', [UniversityController::class, 'softDelete'])->name('university.soft.delete');

    Route::get('/university/restore/{id}', [UniversityController::class, 'restore'])->name('university.restore');

    Route::delete('/university/forceDelete/{id}', [UniversityController::class, 'forceDelete'])->name('university.force.delete');

     //=================================End University route Section==========================
});
