<?php

use App\Http\Controllers\LAdmin\Ads\AdsController;
use App\Http\Controllers\LAdmin\Auth\AuthController;
use App\Http\Controllers\LAdmin\College\CollegeController;
use App\Http\Controllers\LAdmin\CollegeAds\CollegeAdsController;
use App\Http\Controllers\LAdmin\CollegeEvent\CollegeEventController;
use App\Http\Controllers\LAdmin\CollegeFees\CollegeFeesController;
use App\Http\Controllers\LAdmin\Event\EventController;
use App\Http\Controllers\LAdmin\LAdminController;
use App\Http\Controllers\LAdmin\QuestionUser\QuestionUserController;
use App\Http\Controllers\LAdmin\SpecializationCollege\SpecializationCollegeController;
use App\Http\Controllers\LAdmin\StudyFees\StudyFeesController;
use App\Http\Controllers\LAdmin\TeachingStaff\TeachingStaffController;
use App\Http\Controllers\LAdmin\University\UniversityController;
use App\Http\Controllers\LAdmin\UniversityAds\UniversityAdsController;
use App\Http\Controllers\LAdmin\UniversityEvent\UniversityEventController;
use App\Http\Controllers\LAdmin\UniversityLocation\UniversityLocationController;
use App\Http\Controllers\ProfileController;
use App\Models\CollegeFees;
use App\Models\UniversityAds;
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

Route::middleware(['auth:ladmin'])->name('ladmin.')->prefix('ladmin')->group(function () {

    //================================= College Event Route Section ==========================

    Route::get('/college/event/university/index', [CollegeEventController::class, 'index'])->name('college.event.university.index')->middleware('permission:Show College Event Table');

    Route::get('/college/event/university/college/{id}', [CollegeEventController::class, 'collegeIndex'])->name('college.event.university.college.index')->middleware('permission:Show College Event Table');

    Route::get('/college/event/university/college/events/{id}', [CollegeEventController::class, 'eventsIndex'])->name('college.event.university.college.events.index')->middleware('permission:Show College Event Table');

    Route::put('/college/event/university/college/events/done/{id}', [CollegeEventController::class, 'eventsDone'])->name('college.event.university.college.events.done')->middleware('Finish College Event');

    Route::put('/college/event/university/college/events/cancel/{id}', [CollegeEventController::class, 'eventsCancel'])->name('college.event.university.college.events.cancel')->middleware('permission:Cancel College Event');

    Route::delete('/college/event/university/college/events/delete/{id}', [CollegeEventController::class, 'eventsDelete'])->name('college.event.university.college.events.delete')->middleware('permission:Delete College Event');

    Route::get('/college/event/university/college/events/create/{id}', [CollegeEventController::class, 'createEvent'])->name('college.event.university.college.events.create')->middleware('permission:Create College Event');

    Route::post('/college/event/university/college/events/store', [CollegeEventController::class, 'storeEvent'])->name('college.event.university.college.events.store')->middleware('permission:Store College Event');

    Route::get('/college/event/university/college/events/edit/{id}', [CollegeEventController::class, 'eventsEdit'])->name('college.event.university.college.events.edit')->middleware('permission:Edit College Event');

    Route::put('/college/event/university/college/events/update/{id}', [CollegeEventController::class, 'eventsUpdate'])->name('college.event.university.college.events.update')->middleware('permission:Update College Event');

    Route::get('/college/event/university/college/events/image/index/{id}', [CollegeEventController::class, 'eventsImageIndex'])->name('college.event.university.college.events.image.index')->middleware('permission:Show College Event Image Table');

    Route::get('/college/event/university/college/events/image/create/{id}', [CollegeEventController::class, 'eventsImageCreate'])->name('college.event.university.college.events.image.create')->middleware('permission:Create College Event Image');

    Route::post('/college/event/university/college/events/image/store', [CollegeEventController::class, 'eventsImageStore'])->name('college.event.university.college.events.image.store')->middleware('permission:Store College Event Image');

    Route::delete('/college/event/university/college/events/image/delete/{id}', [CollegeEventController::class, 'eventsImageDelete'])->name('college.event.university.college.events.image.delete')->middleware('permission:Delete College Event Image');

    //================================= University College Teachig Staff route Section ==========================


    Route::get('/teachingStaff/index', [TeachingStaffController::class, 'index'])->name('teachingStaff.index')->middleware('permission:Show Teaching Staff Table');

    Route::get('/teachingStaff/create', [TeachingStaffController::class, 'create'])->name('teachingStaff.create')->middleware('permission:Create Teaching Staff');

    Route::post('/teachingStaff/store', [TeachingStaffController::class, 'store'])->name('teachingStaff.store')->middleware('permission:Store Teaching Staff');

    Route::get('/teachingStaff/edit/{id}', [TeachingStaffController::class, 'edit'])->name('teachingStaff.edit')->middleware('permission:Edit Teaching Staff');

    Route::put('/teachingStaff/update/{id}', [TeachingStaffController::class, 'update'])->name('teachingStaff.update')->middleware('permission:Update Teaching Staff');

    Route::get('/teachingStaff/archive', [TeachingStaffController::class, 'archive'])->name('teachingStaff.archive')->middleware('permission:Show Teaching Staff Arcvive Table');

    Route::delete('/teachingStaff/softDelete/{id}', [TeachingStaffController::class, 'softDelete'])->name('teachingStaff.soft.delete')->middleware('permission:Soft Delete Teaching Staff');

    Route::get('/teachingStaff/restore/{id}', [TeachingStaffController::class, 'restore'])->name('teachingStaff.restore')->middleware('permission:Restore Teaching Staff');

    Route::delete('/teachingStaff/forceDelete/{id}', [TeachingStaffController::class, 'forceDelete'])->name('teachingStaff.force.delete')->middleware('permission:Force Delete Teaching Staff');


    //================================= Answer User Question route Section ==========================

    Route::get('/questionUser/new/question', [QuestionUserController::class, 'newQuestion'])->name('questionAnswer.new.question')->middleware('permission:Show Question User Table');

    Route::get('/questionUser/create/answer/{id}', [QuestionUserController::class, 'createAnswer'])->name('questionAnswer.create.answer')->middleware('permission:Create Answer Question User');

    Route::post('/questionUser/store/answer', [QuestionUserController::class, 'storeAnswer'])->name('questionAnswer.store.answer')->middleware('permission:Store Answer Question User');

    Route::get('/questionUser/history/question', [QuestionUserController::class, 'historyQuestion'])->name('questionAnswer.history.question')->middleware('permission:Show Question User Table History');


    //================================= University College Ads route Section ==========================

    Route::get('/college/ads/index', [CollegeAdsController::class, 'index'])->name('college.ads.index')->middleware('permission:Show College Ads Table');

    Route::get('/college/ads/create', [CollegeAdsController::class, 'create'])->name('college.ads.create')->middleware('permission:Create College Ads');

    Route::post('/college/ads/store', [CollegeAdsController::class, 'store'])->name('college.ads.store')->middleware('permission:Store College Ads');

    Route::get('/college/ads/edit/{id}', [CollegeAdsController::class, 'edit'])->name('college.ads.edit')->middleware('permission:Edit College Ads');

    Route::put('/college/ads/update/{id}', [CollegeAdsController::class, 'update'])->name('college.ads.update')->middleware('permission:Update College Ads');

    Route::get('/college/ads/archive', [CollegeAdsController::class, 'archive'])->name('college.ads.archive')->middleware('permission:Show College Ads Arcvive Table');

    Route::delete('/college/ads/softDelete/{id}', [CollegeAdsController::class, 'softDelete'])->name('college.ads.soft.delete')->middleware('permission:Soft Delete College Ads');

    Route::get('/college/ads/restore/{id}', [CollegeAdsController::class, 'restore'])->name('college.ads.restore')->middleware('permission:Restore College Ads');

    Route::delete('/ads/forceDelete/{id}', [CollegeAdsController::class, 'forceDelete'])->name('college.ads.force.delete')->middleware('permission:Force Delete College Ads');


    //================================= University College Study Fees route Section ==========================


    Route::get('/college/fees/index', [CollegeFeesController::class, 'index'])->name('college.fees.index')->middleware('permission:Show College Fees Table');

    Route::get('/college/fees/create', [CollegeFeesController::class, 'create'])->name('college.fees.create')->middleware('permission:Create College Fees');

    Route::post('/college/fees/store', [CollegeFeesController::class, 'store'])->name('college.fees.store')->middleware('permission:Store College Fees');

    Route::get('/college/fees/edit/{id}', [CollegeFeesController::class, 'edit'])->name('college.fees.edit')->middleware('permission:Edit College Fees');

    Route::put('/college/fees/update/{id}', [CollegeFeesController::class, 'update'])->name('college.fees.update')->middleware('permission:Update College Fees');

    Route::get('/college/fees/archive', [CollegeFeesController::class, 'archive'])->name('college.fees.archive')->middleware('permission:Show College Fees Arcvive Table');

    Route::delete('/college/fees/softDelete/{id}', [CollegeFeesController::class, 'softDelete'])->name('college.fees.soft.delete')->middleware('permission:Soft Delete College Fees');

    Route::get('/college/fees/restore/{id}', [CollegeFeesController::class, 'restore'])->name('college.fees.restore')->middleware('permission:Restore College Fees');

    Route::delete('/college/fees/forceDelete/{id}', [CollegeFeesController::class, 'forceDelete'])->name('college.fees.force.delete')->middleware('permission:Force Delete College Fees');


    //================================= University College route Section ==========================


    Route::get('/college/index', [CollegeController::class, 'index'])->name('college.index')->middleware('permission:Show College Table');

    Route::get('/college/create', [CollegeController::class, 'create'])->name('college.create')->middleware('permission:Create College');

    Route::post('/college/store', [CollegeController::class, 'store'])->name('college.store')->middleware('permission:Store College');

    Route::get('/college/edit/{id}', [CollegeController::class, 'edit'])->name('college.edit')->middleware('permission:Edit College');

    Route::put('/college/update/{id}', [CollegeController::class, 'update'])->name('college.update')->middleware('permission:Update College');

    Route::get('/college/archive', [CollegeController::class, 'archive'])->name('college.archive')->middleware('permission:Show College Arcvive Table');

    Route::delete('/college/softDelete/{id}', [CollegeController::class, 'softDelete'])->name('college.soft.delete')->middleware('permission:Soft Delete College');

    Route::get('/college/restore/{id}', [CollegeController::class, 'restore'])->name('college.restore')->middleware('permission:Restore College');

    Route::delete('/college/forceDelete/{id}', [CollegeController::class, 'forceDelete'])->name('college.force.delete')->middleware('permission:Force Delete College');


    //================================= University Specialization College route Section ==========================


    Route::get('/specialization/college/index', [SpecializationCollegeController::class, 'index'])->name('specialization.college.index')->middleware('permission:Show Specialization College Table');

    Route::get('/specialization/college/create', [SpecializationCollegeController::class, 'create'])->name('specialization.college.create')->middleware('permission:Create Specialization College');

    Route::post('/specialization/college/store', [SpecializationCollegeController::class, 'store'])->name('specialization.college.store')->middleware('permission:Store Specialization College');

    Route::get('/specialization/college/edit/{id}', [SpecializationCollegeController::class, 'edit'])->name('specialization.college.edit')->middleware('permission:Edit Specialization College');

    Route::put('/specialization/college/update/{id}', [SpecializationCollegeController::class, 'update'])->name('specialization.college.update')->middleware('permission:Update Specialization College');

    Route::get('/specialization/college/archive', [SpecializationCollegeController::class, 'archive'])->name('specialization.college.archive')->middleware('permission:Show Specialization College Arcvive Table');

    Route::delete('/specialization/college/softDelete/{id}', [SpecializationCollegeController::class, 'softDelete'])->name('specialization.college.soft.delete')->middleware('permission:Soft Delete Specialization College');

    Route::get('/specialization/college/restore/{id}', [SpecializationCollegeController::class, 'restore'])->name('specialization.college.restore')->middleware('permission:Restore Specialization College');

    Route::delete('/specialization/college/forceDelete/{id}', [SpecializationCollegeController::class, 'forceDelete'])->name('specialization.college.force.delete')->middleware('permission:Force Delete Specialization College');


    //================================= University Location route Section ==========================


    Route::get('/university/location/index', [UniversityLocationController::class, 'index'])->name('university.location.index')->middleware('permission:Show University Location Table');

    Route::get('/university/location/create', [UniversityLocationController::class, 'create'])->name('university.location.create')->middleware('permission:Create University Location');

    Route::post('/university/location/store', [UniversityLocationController::class, 'store'])->name('university.location.store')->middleware('permission:Store University Location');

    Route::get('/university/location/edit/{id}', [UniversityLocationController::class, 'edit'])->name('university.location.edit')->middleware('permission:Edit University Location');

    Route::put('/university/location/update/{id}', [UniversityLocationController::class, 'update'])->name('university.location.update')->middleware('permission:Update University Location');

    Route::delete('/university/location/delete/{id}', [UniversityLocationController::class, 'delete'])->name('university.location.delete')->middleware('permission:Delete University Location');



    //================================= University Ads route Section ==========================

    Route::get('/university/ads/index', [UniversityAdsController::class, 'index'])->name('university.ads.index')->middleware('permission:Show University Ads Table');

    Route::get('/university/ads/create', [UniversityAdsController::class, 'create'])->name('university.ads.create')->middleware('permission:Create University Ads');

    Route::post('/university/ads/store', [UniversityAdsController::class, 'store'])->name('university.ads.store')->middleware('permission:Store University Ads');

    Route::get('/university/ads/edit/{id}', [UniversityAdsController::class, 'edit'])->name('university.ads.edit')->middleware('permission:Edit University Ads');

    Route::put('/university/ads/update/{id}', [UniversityAdsController::class, 'update'])->name('university.ads.update')->middleware('permission:Update University Ads');

    Route::get('/university/ads/archive', [UniversityAdsController::class, 'archive'])->name('university.ads.archive')->middleware('permission:Show University Ads Arcvive Table');

    Route::delete('/university/ads/softDelete/{id}', [UniversityAdsController::class, 'softDelete'])->name('university.ads.soft.delete')->middleware('permission:Soft Delete University Ads');

    Route::get('/university/ads/restore/{id}', [UniversityAdsController::class, 'restore'])->name('university.ads.restore')->middleware('permission:Restore University Ads');

    Route::delete('/university/ads/forceDelete/{id}', [UniversityAdsController::class, 'forceDelete'])->name('university.ads.force.delete')->middleware('permission:Force Delete University Ads');


    //================================= University Event route Section ==========================

    Route::get('/university/event/index', [UniversityEventController::class, 'index'])->name('university.event.index')->middleware('permission:Show University Event Table');

    Route::get('/university/event/create', [UniversityEventController::class, 'create'])->name('university.event.create')->middleware('permission:Create University Event');

    Route::post('/university/event/store', [UniversityEventController::class, 'store'])->name('university.event.store')->middleware('permission:Store University Event');

    Route::put('/university/event/done/{id}', [UniversityEventController::class, 'done'])->name('university.event.done')->middleware('permission:Finish University Event');

    Route::put('/university/event/cancel/{id}', [UniversityEventController::class, 'cancel'])->name('university.event.cancel')->middleware('permission:Cancel University Event');

    Route::delete('/university/event/delete/{id}', [UniversityEventController::class, 'delete'])->name('university.event.delete')->middleware('permission:Delete University Event');

    Route::get('/university/event/image/index/{id}', [UniversityEventController::class, 'univEventImageIndex'])->name('university.event.image.index')->middleware('permission:Show University Event Image Table');

    Route::get('/university/event/image/create/{id}', [UniversityEventController::class, 'univEventImageCreate'])->name('university.event.image.create')->middleware('permission:Create University Event Image');

    Route::post('/university/event/image/store', [UniversityEventController::class, 'univEventImageStore'])->name('university.event.image.store')->middleware('permission:Store University Event Image');

    Route::delete('/university/event/image/delete/{id}', [UniversityEventController::class, 'univEventImageDelete'])->name('university.event.image.delete')->middleware('permission:Delete University Event Image');
});
