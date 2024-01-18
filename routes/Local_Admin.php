<?php

use App\Http\Controllers\LAdmin\Ads\AdsController;
use App\Http\Controllers\LAdmin\Auth\AuthController;
use App\Http\Controllers\LAdmin\Event\EventController;
use App\Http\Controllers\LAdmin\LAdminController;
use App\Http\Controllers\LAdmin\TeachingStaff\TeachingStaffController;
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

    //================================= University College route Section ==========================

    Route::get('/university/college/index/{id}', [UniversityController::class, 'universityCollegeIndex'])->name('university.college.index');

    Route::get('/university/choose/college/{id}', [UniversityController::class, 'chooseUniversityCollegeIndex'])->name('university.choose.college');

    Route::post('/university/store/choose/college/{id}', [UniversityController::class, 'storeChooseUniversityCollegeIndex'])->name('university.store.choose.college');

    Route::delete('/university/college/revoke/{id}', [UniversityController::class, 'UniversityCollegeRevoke'])->name('university.college.revoke');

    //================================= University College Specialization route Section ==========================

    Route::delete('/university/college/specialization/index/{id}', [UniversityController::class, 'UniversityCollegeSpecializationIndex'])->name('university.college.specialization.index');

    Route::get('/university/choose/college/specialization/{id}', [UniversityController::class, 'chooseUniversityCollegeSpecialization'])->name('university.college.specialization.choose');

    Route::post('/university/store/choose/college/specialization/{id}', [UniversityController::class, 'storeChooseUniversityCollegeSpecialization'])->name('university.college.specialization.choose.store');

    Route::delete('/university/college/specialization/revoke/{id}', [UniversityController::class, 'UniversityCollegeSpecializationRevoke'])->name('university.college.specialization.revoke');


    //================================= University And College Ads route Section ==========================

    Route::get('/ads/index', [AdsController::class, 'index'])->name('ads.index');

    Route::get('/ads/create', [AdsController::class, 'create'])->name('ads.create');

    Route::post('/ads/store', [AdsController::class, 'store'])->name('ads.store');

    Route::get('/ads/edit/{id}', [AdsController::class, 'edit'])->name('ads.edit');

    Route::put('/ads/update/{id}', [AdsController::class, 'update'])->name('ads.update');

    Route::get('/ads/archive', [AdsController::class, 'archive'])->name('ads.archive');

    Route::delete('/ads/softDelete/{id}', [AdsController::class, 'softDelete'])->name('ads.soft.delete');

    Route::get('/ads/restore/{id}', [AdsController::class, 'restore'])->name('ads.restore');

    Route::delete('/ads/forceDelete/{id}', [AdsController::class, 'forceDelete'])->name('ads.force.delete');

    Route::get('/ads/university/{id}', [AdsController::class, 'adsUniversity'])->name('ads.university');

    Route::get('/ads/university/choose/{id}', [AdsController::class, 'chooseUniversity'])->name('ads.choose.university');

    Route::post('/ads/university/choose/store/{id}', [AdsController::class, 'storeChooseUniversity'])->name('ads.store.choose.university');

    Route::delete('/ads/university/revoke/{id}', [AdsController::class, 'revokeUniversity'])->name('ads.university.revoke');

    Route::get('/ads/college/university/{id}', [AdsController::class, 'adsCollegeUniversity'])->name('ads.college.university');

    Route::get('/ads/choose/college/university/{id}', [AdsController::class, 'adsChooseCollegeUniversity'])->name('ads.choose.college.university');

    Route::post('/ads/store/choose/college/university/{id}', [AdsController::class, 'adsStoreChooseCollegeUniversity'])->name('ads.store.choose.college.university');

    Route::delete('/ads/college/university/revoke/{id}', [AdsController::class, 'adsCollegeUniversityRevoke'])->name('ads.college.university.revoke');


    //================================= University College Teachig Staff route Section ==========================


    Route::get('/teachingStaff/index', [TeachingStaffController::class, 'index'])->name('teachingStaff.index');

    Route::get('/teachingStaff/create', [TeachingStaffController::class, 'create'])->name('teachingStaff.create');

    Route::post('/teachingStaff/store', [TeachingStaffController::class, 'store'])->name('teachingStaff.store');

    Route::get('/teachingStaff/edit/{id}', [TeachingStaffController::class, 'edit'])->name('teachingStaff.edit');

    Route::put('/teachingStaff/update/{id}', [TeachingStaffController::class, 'update'])->name('teachingStaff.update');

    Route::get('/teachingStaff/archive', [TeachingStaffController::class, 'archive'])->name('teachingStaff.archive');

    Route::delete('/teachingStaff/softDelete/{id}', [TeachingStaffController::class, 'softDelete'])->name('teachingStaff.soft.delete');

    Route::get('/teachingStaff/restore/{id}', [TeachingStaffController::class, 'restore'])->name('teachingStaff.restore');

    Route::delete('/teachingStaff/forceDelete/{id}', [TeachingStaffController::class, 'forceDelete'])->name('teachingStaff.force.delete');


    //================================= University College Event route Section ==========================


    Route::get('/event/index', [EventController::class, 'index'])->name('event.index');

    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');

    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');

    Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');

    Route::put('/event/update/{id}', [EventController::class, 'update'])->name('event.update');

    Route::get('/event/archive', [EventController::class, 'archive'])->name('event.archive');

    Route::delete('/event/softDelete/{id}', [EventController::class, 'softDelete'])->name('event.soft.delete');

    Route::get('/event/restore/{id}', [EventController::class, 'restore'])->name('event.restore');

    Route::delete('/event/forceDelete/{id}', [EventController::class, 'forceDelete'])->name('event.force.delete');

    Route::put('/event/done/{id}', [EventController::class, 'done'])->name('event.done');

    Route::put('/event/cancel/{id}', [EventController::class, 'cancel'])->name('event.cancel');

    Route::get('/event/Image/index/{id}', [EventController::class, 'eventImageIndex'])->name('event.image.index');

    Route::get('/event/Image/create/{id}', [EventController::class, 'eventImageCreate'])->name('event.image.create');

    Route::post('/event/Image/store', [EventController::class, 'eventImageStore'])->name('event.image.store');

    Route::delete('/event/Image/delete/{id}', [EventController::class, 'eventImageDelete'])->name('event.image.delete');
});
