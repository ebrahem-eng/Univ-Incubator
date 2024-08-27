<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [WebController::class, 'index'])->name('web.index');

Route::get('/university/details/{id}', [WebController::class, 'universityDetails'])->name('web.university.details');

Route::get('/college/details/{id}', [WebController::class, 'collegeDetails'])->name('web.college.details');

Route::get('/user/login', [WebController::class, 'userLogin'])->name('web.login');

Route::post('/user/login/store', [WebController::class, 'storeLogin'])->name('web.login.store');

Route::get('/user/logout', [WebController::class, 'logoutUser'])->name('web.logout');

Route::get('/user/register', [WebController::class, 'userRegister'])->name('web.register');

Route::post('/user/register/store', [WebController::class, 'storeRegister'])->name('web.register.store');

Route::post('/web/search/university', [WebController::class, 'searchUniversity'])->name('web.search.univeristy');

Route::middleware(['userS'])->prefix('user')->group(function () {

    Route::post('/question/store', [WebController::class, 'storeQuestion'])->name('web.question.store');

    Route::get('/question/index', [WebController::class, 'questionIndex'])->name('web.question.index');
});

require __DIR__ . '/auth.php';
