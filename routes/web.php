<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UnivController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/univ/spu' , [UnivController::class , 'univ_spu'])->name('univ.spu');

Route::get('/univ/iust' , [UnivController::class , 'univ_iust'])->name('univ.iust');

Route::get('/univ/aiu' , [UnivController::class , 'univ_aiu'])->name('univ.aiu');

Route::get('/univ/rpu' , [UnivController::class , 'univ_rpu'])->name('univ.rpu');

Route::get('/univ/aspu' , [UnivController::class , 'univ_aspu'])->name('univ.aspu');

Route::get('/univ/ypu' , [UnivController::class , 'univ_ypu'])->name('univ.ypu');

Route::get('/univ/jpu' , [UnivController::class , 'univ_jpu'])->name('univ.jpu');

require __DIR__.'/auth.php';
