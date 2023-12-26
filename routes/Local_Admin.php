<?php

use App\Http\Controllers\LAdmin\Auth\AuthController;
use App\Http\Controllers\LAdmin\LAdminController;
use App\Http\Controllers\LAdmin\University\UniversityController;
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

Route::middleware(['ladmin'])->name('ladmin.')->prefix('ladmin')->group(function () {

    //================================= University route Section ==========================
  
    Route::get('/university/index', [UniversityController::class, 'index'])->name('university.index');

    Route::get('/university/edit/address/{id}', [UniversityController::class, 'editAddress'])->name('university.edit.address');
  
    Route::put('/university/update/address/{id}', [UniversityController::class, 'updateAddress'])->name('university.update.address');

    Route::get('/university/college/index/{id}', [UniversityController::class, 'universityCollegeIndex'])->name('university.college.index');

    Route::get('/university/choose/college/{id}', [UniversityController::class, 'chooseUniversityCollegeIndex'])->name('university.choose.college');

    Route::post('/university/store/choose/college/{id}', [UniversityController::class, 'storeChooseUniversityCollegeIndex'])->name('university.store.choose.college');

    Route::delete('/university/college/revoke/{id}', [UniversityController::class, 'UniversityCollegeRevoke'])->name('university.college.revoke');

    Route::delete('/university/college/specialization/index/{id}', [UniversityController::class, 'UniversityCollegeSpecializationIndex'])->name('university.college.specialization.index');

});
