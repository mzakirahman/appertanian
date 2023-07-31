<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\LoginController;

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
Route::get('/pengunjung',[PetaniController::class,'pengunjung']);
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    Route::get('/dashboard', [PetaniController::class,'index']);

    // routing menu petani
    Route::get('/kecamatan', [PetaniController::class,'kecamatan']);
    Route::get('/hapuskecamatan/{id}', [PetaniController::class,'hapuskecamatan']);
    Route::post('/simpankecamatan', [PetaniController::class,'simpankecamatan'])->name('simpankecamatan');
    Route::post('/updatekecamatan', [PetaniController::class,'updatekecamatan'])->name('updatekecamatan');

    Route::get('/desa', [PetaniController::class,'desa']);
    Route::get('/hapusdesa/{id}', [PetaniController::class,'hapusdesa'])->name('hapusdesa');
    Route::post('/simpandesa', [PetaniController::class,'simpandesa'])->name('simpandesa');
    Route::post('/updatedesa', [PetaniController::class,'updatedesa'])->name('updatedesa');

    Route::get('/kelas', [PetaniController::class,'kelas']);
    Route::get('/hapuskekelas/{id}', [PetaniController::class,'hapuskekelas'])->name('hapuskelas');
    Route::post('/simpankelas', [PetaniController::class,'simpankelas'])->name('simpankelas');
    Route::post('/updatekelas', [PetaniController::class,'updatekelas'])->name('updatekelas');

    Route::get('/kategori', [PetaniController::class,'kategori']);
    Route::get('/hapuskategori/{id}', [PetaniController::class,'hapuskategori'])->name('hapuskategori');
    Route::post('/simpankategori', [PetaniController::class,'simpankategori'])->name('simpankategori');
    Route::post('/updatekategori', [PetaniController::class,'updatekategori'])->name('updatekategori');

    Route::get('/daftar',[PetaniController::class,'daftar']);
    Route::get('/hapusdaftar/{id}', [PetaniController::class,'hapusdaftar'])->name('hapusdaftar');
    Route::get('/detail/{id}', [PetaniController::class,'detail'])->name('detail');
    Route::post('/simpandaftar', [PetaniController::class,'simpandaftar'])->name('simpandaftar');
    Route::post('/updatedaftar', [PetaniController::class,'updatedaftar'])->name('updatedaftar');

    Route::get('/grafik',[PetaniController::class,'grafik']);
    Route::get('/mapping',[PetaniController::class,'mapping']);
    Route::get('/profil',[PetaniController::class,'profil']);
     Route::post('/updateprofil', [PetaniController::class,'updateprofil'])->name('updateprofil');
     Route::post('/updateprofil2', [PetaniController::class,'updateprofil2'])->name('updateprofil2');