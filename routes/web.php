<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PenumpangController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\JadwalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('utama.dashboard');
});

// middleware untuk login
Route::group(['middleware' => ['auth', 'peran:admin-staff-supir']], function(){

//untuk bagian halaman utama
Route::prefix('tiket')->group(function(){
Route::get('/', [TiketController::class, 'index1']);
Route::get('/pesantiket/{id}', [TiketController::class, 'pesantiket']);
Route::post('/store', [TransaksiController::class, 'pesantiket']);
});
    
Route::get('/riwayat/{id}', [TransaksiController::class, 'index1']);
Route::get('/riwayat/lihat/{id}', [TransaksiController::class, 'show1']);
Route::get('/riwayat/download/{id}', [TransaksiController::class, 'DownloadaPDF']);

//untuk bagian halaman admin
Route::prefix('admin')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/armada', [ArmadaController::class, 'index']);
Route::get('/armada/create', [ArmadaController::class, 'create']);
Route::post('/armada/store', [ArmadaController::class, 'store']);
Route::get('/armada/show/{id}', [ArmadaController::class, 'show']);
Route::get('/armada/edit/{id}', [ArmadaController::class, 'edit']);
Route::post('/armada/update/{id}', [ArmadaController::class, 'update']);
Route::get('/armada/delete/{id}', [ArmadaController::class, 'destroy']);
Route::get('/armada/armadaAllPDF', [ArmadaController::class, 'armadaAllPDF']);
Route::get('/armada/idPDF/{id}', [ArmadaController::class, 'idPDF']);
Route::get('/armada/export/', [ArmadaController::class, 'exportArmada']);
Route::post('/armada/import/', [ArmadaController::class, 'importArmada']);



Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::get('/transaksi/create', [TransaksiController::class, 'create']);
Route::post('/transaksi/store', [TransaksiController::class, 'store']);

Route::get('/tiket', [TiketController::class, 'index']);
Route::get('/tiket/create', [TiketController::class, 'create']);
Route::post('/tiket/store', [TiketController::class, 'store']);

Route::get('/member', [MemberController::class, 'index']);
Route::get('/member/create', [MemberController::class, 'create']);
Route::post('/member/store', [MemberController::class, 'store']);

route::get('/penumpang', [PenumpangController::class, 'index']);
route::get('/penumpang/create', [PenumpangController::class, 'create']);
route::post('/penumpang/store', [PenumpangController::class, 'store']);

route::get('/jadwal', [JadwalController::class, 'index']);
route::get('/jadwal/create', [JadwalController::class, 'create']);
route::post('/jadwal/store', [JadwalController::class, 'store']);
Route::get('/jadwal/show/{id}', [JadwalController::class, 'show']);
Route::get('/jadwal/edit/{id}', [JadwalController::class, 'edit']);
Route::post('/jadwal/update/{id}', [JadwalController::class, 'update']);
Route::get('/jadwal/delete/{id}', [JadwalController::class, 'destroy']);
Route::get('/jadwal/jadwalAllPDF', [JadwalController::class, 'jadwalAllPDF']);
Route::get('/jadwal/jadwalIdPDF/{id}', [JadwalController::class, 'jadwalIdPDF']);
Route::get('/jadwal/export/', [JadwalController::class, 'exportJadwal']);
// Route::post('/jadwal/import/', [JadwalController::class, 'importJadwal']);





Route::resource('rute', RuteController::class);
});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
