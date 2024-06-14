<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Models\Pasien;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::prefix('kelurahan')->group(function () {
    Route::get('/', [KelurahanController::class, 'index'])->name('kelurahan.index');
    Route::get('/create', [KelurahanController::class, 'create'])->name('kelurahan.create');
    Route::post('/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
    Route::get('/show{id}', [KelurahanController::class, 'show'])->name('kelurahan.show');
    Route::get('/edit/{id}', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
    Route::put('/update/{id}', [KelurahanController::class, 'update'])->name('kelurahan.update');
    Route::delete('/delete/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');
});


Route::prefix('pasien')->group(function () {
    Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::post('/store', [PasienController::class, 'store'])->name('pasien.store');
    Route::get('/show{id}', [PasienController::class, 'show'])->name('pasien.show');
    Route::get('/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
    Route::put('/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
    Route::delete('/delete/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');


});

    Route::get('/dahsboard', [adminController::class, 'index']);
    //praktikum3
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
    //praktikum4

});

require __DIR__ . '/auth.php';
Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang iam Di Laravel');
});

Route::get('/profile', function () {
    return view('Halaman Profile');
});


//praktikum laravel 2

// Route::get('/dahsboard', [adminController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/About', [AboutController::class, 'index']);

//praktikum laravel 3
// Route::get('/kelurahan', [KelurahanController::class, 'index'])->name('kelurahan.index');
// Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
// Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');

//Praktikum laravel 4
// Route::get('/kelurahan/create', [KelurahanController::class, 'create'])->name('kelurahan.create');
// Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
// Route::get('/kelurahan/show{id}', [KelurahanController::class, 'show'])->name('kelurahan.show');

// Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
// Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');
// Route::get('/pasien/show{id}', [PasienController::class, 'show'])->name('pasien.show');


//
// Route::get('/kelurahan/edit/{id}', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
// Route::put('/kelurahan/update/{id}', [KelurahanController::class, 'update'])->name('kelurahan.update');
// Route::delete('/kelurahan/delete/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');

// //
// Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
// Route::put('/pasien/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
// Route::delete('/pasien/delete/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
