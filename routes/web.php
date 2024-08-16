<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\DosenRoleController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MahasiswaRoleKaprodiController;
use App\Http\Controllers\PlotingController;
use App\Http\Controllers\ProfileController;
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
})->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// // Route untuk menampilkan dashboard kaprodi
// Route::get('/dashboard', [DosenController::class, 'dashboard'])->name('dashboard');

// // ----------------- DOSEN --------------------
// // Menampilkan daftar dosen
// Route::get('/dosen', [DosenController::class, 'indexDosen'])->name('dosen.index');

// // Menyimpan data dosen baru
// Route::post('/dosen', [DosenController::class, 'storeDosen'])->name('dosen.store');

// // Memperbarui data dosen
// // Route::post('/dosen/{dosen}', [DosenController::class, 'updateDosen'])->name('dosen.update');
// Route::post('/dosen/{id}', [DosenController::class, 'updateDosen']);

// // Menghapus data dosen
// Route::delete('/dosen/{dosen}', [DosenController::class, 'destroyDosen'])->name('dosen.destroy');


//Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->name('dashboard');

Route::middleware('role:kaprodi')->group(function () {
    // ----------------- DOSEN --------------------
    // Route::get('/dashboard', [DosenController::class, 'dashboard'])->name('dashboard');
    // Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->name('dashboard');
    Route::get('/dosen', [DosenController::class, 'indexDosen'])->name('dosen.index');
    Route::get('/dosenn/search', [DosenController::class, 'search'])->name('dosenn.search');
    Route::post('/dosen', [DosenController::class, 'storeDosen'])->name('dosen.store');
    Route::post('/dosen/{kode_dosen}', [DosenController::class, 'updateDosen'])->name('dosen.update');
    Route::delete('/dosen/{dosen}', [DosenController::class, 'destroyDosen'])->name('dosen.destroy');

    // ----------------- MAHASISWA ----------------
    Route::get('/mhs', [MahasiswaRoleKaprodiController::class, 'indexMahasiswa'])->name('mhs.index');
    Route::get('/mhs/search', [MahasiswaRoleKaprodiController::class, 'search'])->name('mhs.search');
    Route::get('/mhs/{id}/edit', [MahasiswaRoleKaprodiController::class, 'edit'])->name('mhs.edit');
    Route::post('/mhs', [MahasiswaRoleKaprodiController::class, 'storeMahasiswa'])->name('mhs.store');
    Route::post('/mhs/{nim}', [MahasiswaRoleKaprodiController::class, 'updateMahasiswa'])->name('mhs.update');
    // Route::put('/mhs/{id}', [MahasiswaRoleKaprodiController::class, 'updateMahasiswa'])->name('mhs.update');
    Route::delete('/mhs/{mahasiswa}', [MahasiswaRoleKaprodiController::class, 'destroyMahasiswa'])->name('mhs.destroy');

    // ----------------- KELAS --------------------
    // Fitur cari
    Route::get('/kelas/search', [KelasController::class, 'search'])->name('kelas.search');
    // Route untuk menampilkan daftar kelas
    Route::get('/kelas', [KelasController::class, 'indexKelas'])->name('kelas.index');
    // Route untuk menyimpan data kelas baru
    Route::post('/kelas', [KelasController::class, 'storeKelas'])->name('kelas.store');
    // Route untuk memperbarui data kelas
    Route::post('/kelas/{id}', [KelasController::class, 'updateKelas'])->name('kelas.update');
    // Route untuk menghapus data kelas
    Route::delete('/kelas/{kelas}', [KelasController::class, 'destroyKelas'])->name('kelas.destroy');

    // ----------------- PLOTING -------------------
    Route::get('/plotting', [PlotingController::class, 'indexPlot'])->name('plotting.index');
    Route::post('/plotting/dosen/update', [PlotingController::class, 'updateKelasDosen'])->name('plotting.updateKelasDosen');
    Route::delete('/plotting/dosen/destroy/{id}', [PlotingController::class, 'destroyKelasDosen'])->name('plotting.destroyKelasDosen');

    Route::post('/plotting/mahasiswa/update', [PlotingController::class, 'updateKelasMahasiswa'])->name('plotting.updateKelasMahasiswa');
    Route::delete('/plotting/mahasiswa/destroy/{id}', [PlotingController::class, 'destroyKelasMahasiswa'])->name('plotting.destroyKelasMahasiswa');

});

Route::middleware('role:mahasiswa')->group(function () {
    // Route::get('/dashboard', [MahasiswaController::class, 'dashboard'])->name('dashboard');
    Route::get('/profilemahasiswa', [MahasiswaController::class, 'profilemahasiswa'])->name('mahasiswa.profilemahasiswa');
    //Route agar bisa klik request
    Route::post('/requests', [MahasiswaController::class, 'store'])->name('requests.store');
    //Route untuk mengupdate data mahasiswa yang di edit
    Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::post('/mahasiswa/{id}/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    //Route agar bisa klik request

    //Route untuk permintaan edit
    Route::post('/profilemahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
});

Route::middleware(['auth', 'dosen'])->group(function () {
    Route::get('/dosenrole', [DosenRoleController::class, 'index'])->name('dosenrole.index');
    Route::get('/mahasiswa', [DosenRoleController::class, 'filterByClass'])->name('dosen.filterByClass');
    Route::get('/requestmhs', [DosenRoleController::class, 'Request'])->name('request.index');
    Route::get('/dosen/search', [DosenRoleController::class, 'search'])->name('dosen.search');
    Route::get('/dosen/searchmhs', [DosenRoleController::class, 'searchmhs'])->name('dosen.searchmhs');
    Route::post('/requestAcc', [DosenRoleController::class, 'UpdateEdit'])->name('update.request');
    Route::get('/dosen/create', [DosenRoleController::class, 'create'])->name('dosenrole.create');
    Route::post('/dosen/store', [DosenRoleController::class, 'store'])->name('dosenrole.store');
    Route::get('/dosen/edit/{id}', [DosenRoleController::class, 'edit'])->name('dosenrole.edit');
    Route::post('/dosen/update/{id}', [DosenRoleController::class, 'update'])->name('dosenrole.update');
    Route::post('/dosen/updatekelas/{id}', [DosenRoleController::class, 'destroy'])->name('dosenrole.destroykelas');
    Route::delete('/dosen/hapus/{id}', [DosenRoleController::class, 'destroy'])->name('dosenrole.destroy');
});

