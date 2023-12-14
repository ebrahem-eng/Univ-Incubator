<?php

use App\Http\Controllers\GAdmin\Auth\AuthController;
use App\Http\Controllers\GAdmin\GAdminController;
use App\Http\Controllers\GAdmin\LocalAdmin\LAdminController;
use App\Http\Controllers\GAdmin\Permission\PermissionController;
use App\Http\Controllers\GAdmin\Role\RoleController;
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

Route::middleware(['gadmin'])->name('gadmin.')->prefix('gadmin')->group(function () {

  //=================================University route Section==========================

  Route::get('/university/index', [UniversityController::class, 'index'])->name('university.index');

  Route::get('/university/create', [UniversityController::class, 'create'])->name('university.create');

  Route::post('/university/store', [UniversityController::class, 'store'])->name('university.store');

  Route::get('/university/edit/{id}', [UniversityController::class, 'edit'])->name('university.edit');

  Route::get('/university/edit/address/{id}', [UniversityController::class, 'editAddress'])->name('university.edit.address');

  Route::put('/university/update/{id}', [UniversityController::class, 'update'])->name('university.update');

  Route::put('/university/update/address/{id}', [UniversityController::class, 'updateAddress'])->name('university.update.address');

  Route::get('/university/archive', [UniversityController::class, 'archive'])->name('university.archive');

  Route::delete('/university/softDelete/{id}', [UniversityController::class, 'softDelete'])->name('university.soft.delete');

  Route::get('/university/restore/{id}', [UniversityController::class, 'restore'])->name('university.restore');

  Route::delete('/university/forceDelete/{id}', [UniversityController::class, 'forceDelete'])->name('university.force.delete');

  //=================================End University route Section==========================


  //=================================Local Admin route Section==========================

  Route::get('/ladmin/index', [LAdminController::class, 'index'])->name('ladmin.index');

  Route::get('/ladmin/create', [LAdminController::class, 'create'])->name('ladmin.create');

  Route::post('/ladmin/store', [LAdminController::class, 'store'])->name('ladmin.store');

  Route::get('/ladmin/edit/{id}', [LAdminController::class, 'edit'])->name('ladmin.edit');

  Route::put('/ladmin/update/{id}', [LAdminController::class, 'update'])->name('ladmin.update');

  Route::get('/ladmin/archive', [LAdminController::class, 'archive'])->name('ladmin.archive');

  Route::get('/ladmin/university/{id}', [LAdminController::class, 'university'])->name('ladmin.university');

  Route::get('/ladmin/add/university/{id}', [LAdminController::class, 'addUniversity'])->name('ladmin.add.university');

  Route::post('/ladmin/store/university/{id}', [LAdminController::class, 'storeUniversity'])->name('ladmin.store.university');

  Route::delete('/ladmin/softDelete/{id}', [LAdminController::class, 'softDelete'])->name('ladmin.soft.delete');

  Route::get('/ladmin/restore/{id}', [LAdminController::class, 'restore'])->name('ladmin.restore');

  Route::delete('/ladmin/forceDelete/{id}', [LAdminController::class, 'forceDelete'])->name('ladmin.force.delete');

  Route::get('/ladmin/{ladmin}', [LAdminController::class, 'show'])->name('ladmin.show.roles');
  Route::post('/ladmin/{ladmin}/roles', [LAdminController::class, 'assignrole'])->name('ladmin.roles');
  Route::delete('/ladmin/{ladmin}/roles/{role}', [LAdminController::class, 'removerole'])->name('ladmin.roles.remove');

  Route::post('/ladmin/{ladmin}/permissions', [LAdminController::class, 'givepermission'])->name('ladmin.permissions');
  Route::delete('/ladmin/{ladmin}/permissions/{permission}', [LAdminController::class, 'revokepermission'])->name('ladmin.permissions.revoke');


  //============================== Admin Role =====================================

  Route::get('/roles/givepermission/{role}', [RoleController::class, 'go_to_give_permissions'])->name('go.roles.permissions');
  Route::post('/roles/{role}/permissions', [RoleController::class, 'givepermission'])->name('roles.permissions');
  Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokepermission'])->name('roles.permissions.revoke');

  Route::resource('/roles', RoleController::class);

  //============================== Admin Permission =================================

  Route::get('/permissions/giveroles/{permission}', [PermissionController::class, 'go_to_give_permissions'])->name('go.permissions.roles');
  Route::post('/permissions/{permission}/roles', [PermissionController::class, 'giverole'])->name('permissions.roles');
  Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removepermission'])->name('permissions.roles.remove');
  Route::resource('/permissions', PermissionController::class);
});
