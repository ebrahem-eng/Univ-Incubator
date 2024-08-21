<?php

use App\Http\Controllers\GAdmin\Auth\AuthController;
use App\Http\Controllers\GAdmin\College\CollegeController;
use App\Http\Controllers\GAdmin\GAdminController;
use App\Http\Controllers\GAdmin\LocalAdmin\LAdminController;
use App\Http\Controllers\GAdmin\Permission\PermissionController;
use App\Http\Controllers\GAdmin\Role\RoleController;
use App\Http\Controllers\GAdmin\Specialization\SpecializationController;
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

Route::middleware(['auth:gadmin'])->name('gadmin.')->prefix('gadmin')->group(function () {

  //=================================University route Section==========================

  Route::get('/university/index', [UniversityController::class, 'index'])->name('university.index')->middleware('permission:Show University Table');

  Route::get('/university/create', [UniversityController::class, 'create'])->name('university.create')->middleware('permission:Create University');

  Route::post('/university/store', [UniversityController::class, 'store'])->name('university.store')->middleware('permission:Store University');

  Route::get('/university/edit/{id}', [UniversityController::class, 'edit'])->name('university.edit')->middleware('permission:Edit University');

  Route::put('/university/update/{id}', [UniversityController::class, 'update'])->name('university.update')->middleware('permission:Update University');

  Route::get('/university/archive', [UniversityController::class, 'archive'])->name('university.archive')->middleware('permission:Show University Archive Table');

  Route::delete('/university/softDelete/{id}', [UniversityController::class, 'softDelete'])->name('university.soft.delete')->middleware('permission:Soft Delete University');

  Route::get('/university/restore/{id}', [UniversityController::class, 'restore'])->name('university.restore')->middleware('permission:Restore University');

  Route::delete('/university/forceDelete/{id}', [UniversityController::class, 'forceDelete'])->name('university.force.delete')->middleware('permission:Force Delete University');

  //=================================End University route Section==========================


  //=================================Local Admin route Section==========================

  Route::get('/ladmin/index', [LAdminController::class, 'index'])->name('ladmin.index')->middleware('permission:Show Local Admin Table');

  Route::get('/ladmin/create', [LAdminController::class, 'create'])->name('ladmin.create')->middleware('permission:Create Local Admin');

  Route::post('/ladmin/store', [LAdminController::class, 'store'])->name('ladmin.store')->middleware('permission:Store Local Admin');

  Route::get('/ladmin/edit/{id}', [LAdminController::class, 'edit'])->name('ladmin.edit')->middleware('permission:Edit Local Admin');

  Route::put('/ladmin/update/{id}', [LAdminController::class, 'update'])->name('ladmin.update')->middleware('permission:Update Local Admin');

  Route::get('/ladmin/archive', [LAdminController::class, 'archive'])->name('ladmin.archive')->middleware('permission:Show Local Admin Arcvive Table');

  Route::get('/ladmin/university/{id}', [LAdminController::class, 'university'])->name('ladmin.university')->middleware('permission:Show University Local Admin Table');

  Route::get('/ladmin/add/university/{id}', [LAdminController::class, 'addUniversity'])->name('ladmin.add.university')->middleware('permission:Add University To Local Admin');

  Route::post('/ladmin/store/university/{id}', [LAdminController::class, 'storeUniversity'])->name('ladmin.store.university')->middleware('permission:Store University To Local Admin');

  Route::delete('/ladmin/revoke/university/{id}', [LAdminController::class, 'revokeUniversity'])->name('ladmin.revoke.university')->middleware('permission:Revoke University From Local Admin');

  Route::delete('/ladmin/softDelete/{id}', [LAdminController::class, 'softDelete'])->name('ladmin.soft.delete')->middleware('permission:Soft Delete Local Admin');

  Route::get('/ladmin/restore/{id}', [LAdminController::class, 'restore'])->name('ladmin.restore')->middleware('permission:Restore Local Admin');

  Route::delete('/ladmin/forceDelete/{id}', [LAdminController::class, 'forceDelete'])->name('ladmin.force.delete')->middleware('permission:Force Delete Local Admin');

  Route::get('/ladmin/{ladmin}', [LAdminController::class, 'show'])->name('ladmin.show.roles')->middleware('permission:Show Local Admin Role Permission Page');

  Route::post('/ladmin/{ladmin}/roles', [LAdminController::class, 'assignrole'])->name('ladmin.roles')->middleware('permission:Assign Role To Local Admin');

  Route::delete('/ladmin/{ladmin}/roles/{role}', [LAdminController::class, 'removerole'])->name('ladmin.roles.remove')->middleware('permission:Delete Role From Local Admin');

  Route::post('/ladmin/{ladmin}/permissions', [LAdminController::class, 'givepermission'])->name('ladmin.permissions')->middleware('permission:Give Permission To Local Admin');

  Route::delete('/ladmin/{ladmin}/permissions/{permission}', [LAdminController::class, 'revokepermission'])->name('ladmin.permissions.revoke')->middleware('permission:Revoke Permission From Local Admin');


  //============================== Admin Role =====================================

  Route::get('/roles/givepermission/{role}', [RoleController::class, 'go_to_give_permissions'])->name('go.roles.permissions')->middleware('permission:Show Permission Role Page');

  Route::post('/roles/{role}/permissions', [RoleController::class, 'givepermission'])->name('roles.permissions')->middleware('permission:Assign Role To Permission');

  Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokepermission'])->name('roles.permissions.revoke')->middleware('permission:Revoke Role From Permission');

  Route::resource('/roles', RoleController::class)->middleware('permission:Show Role Table');

  //============================== Admin Permission =================================

  Route::get('/permissions/giveroles/{permission}', [PermissionController::class, 'go_to_give_permissions'])->name('go.permissions.roles')->middleware('permission:Show Permission Role Table');

  Route::post('/permissions/{permission}/roles', [PermissionController::class, 'giverole'])->name('permissions.roles')->middleware('permission:Give Permission To Role');

  Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removepermission'])->name('permissions.roles.remove')->middleware('permission:Revoke Permission From Role');

  Route::resource('/permissions', PermissionController::class)->middleware('permission:Show Permission Table');
});
