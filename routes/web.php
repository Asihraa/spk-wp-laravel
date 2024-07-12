<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PenilaianController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;

use Illuminate\Http\Request;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/info-gunung', [PageController::class, 'infoGunung'])->name('info-gunung');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::post('login/google', 'loginByGoogle')->name('login.google');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');

});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(AlternatifController::class)->prefix('alternatifs')->group(function () {
        Route::get('', 'index')->name('alternatif');
        Route::get('create', 'create')->name('alternatif.create');
        Route::post('store', 'store')->name('alternatif.store');
        Route::get('edit/{id}', 'edit')->name('alternatif.edit');
        Route::put('edit/{id}', 'update')->name('alternatif.update');
        Route::delete('destroy/{id}', 'destroy')->name('alternatif.destroy');
    });

    Route::controller(KriteriaController::class)->prefix('kriterias')->group(function () {
        Route::get('', 'index')->name('kriteria');
        Route::get('create', 'create')->name('kriteria.create');
        Route::post('store', 'store')->name('kriteria.store');
        Route::get('edit/{id}', 'edit')->name('kriteria.edit');
        Route::put('edit/{id}', 'update')->name('kriteria.update');
        Route::delete('destroy/{id}', 'destroy')->name('kriteria.destroy');
    });   

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');

});


Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');
Route::get('/penilaian/create', [PenilaianController::class, 'create'])->name('penilaian.create');
Route::post('/penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');
Route::get('/penilaian/{id}/edit', [PenilaianController::class, 'getForms'])->name('penilaian.edit');
Route::put('/penilaian/update', [PenilaianController::class, 'update'])->name('penilaian.update');
Route::delete('/penilaian/{id}', [PenilaianController::class, 'destroy'])->name('penilaian.destroy');
Route::get('/penilaian/calculate', [CalculateController::class, 'wp'])->name('penilaian.calculate');

Route::get('/forgotpass', function(){
    return view('auth.forgotpassword');
})->name('forgotpass');