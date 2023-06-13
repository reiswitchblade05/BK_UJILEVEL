<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UIController;
use App\Http\Controllers\UIGuruController;
use App\Http\Controllers\UIMuridController;
use App\Http\Controllers\UIWaliKelasController;

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

// UI

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//Admin Pages
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    route::get('/dashboardadmin', [UIController::class, 'dashboardadmin'])->name('admin');

    //Kelas Pages
    route::get('/kelasadmin', [UIController::class, 'kelasadmin'])->name('kelasadmin');
    route::get('/tambahkelas', [UIController::class, 'tambahkelas'])->name('tambahkelas');
    route::post('/insertkelas', [UIController::class, 'insertkelas'])->name('insertkelas');
    route::get('/editkelas/{id}', [UIController::class, 'editkelas'])->name('editkelas');
    route::post('/updatekelas/{id}', [UIController::class, 'updatekelas'])->name('updatekelas');
    route::get('/hapuskelas/{id}', [UIController::class, 'hapuskelas'])->name('hapuskelas');

    //Walikelas Pages
    route::get('/walikelasadmin', [UIController::class, 'walikelasadmin'])->name('walikelasadmin');
    route::get('/tambahwalikelas', [UIController::class, 'tambahwalikelas'])->name('tambahwalikelas');
    route::post('/insertwalikelas', [UIController::class, 'insertwalikelas'])->name('insertwalikelas');
    route::get('/editwalikelas/{id}', [UIController::class, 'editwalikelas'])->name('editwalikelas');
    route::post('/updatewalikelas/{id}', [UIController::class, 'updatewalikelas'])->name('updatewalikelas');
    route::get('/hapuswalikelas/{id}', [UIController::class, 'hapuswalikelas'])->name('hapuswalikelas');

    //Guru Pages
    route::get('/guruadmin', [UIController::class, 'guruadmin'])->name('guruadmin');
    route::get('/tambahguru', [UIController::class, 'tambahguru'])->name('tambahguru');
    route::post('/insertguru', [UIController::class, 'insertguru'])->name('insertguru');
    route::get('/editguru/{id}', [UIController::class, 'editguru'])->name('editguru');
    route::post('/updateguru/{id}', [UIController::class, 'updateguru'])->name('updateguru');
    route::get('/hapusguru/{id}', [UIController::class, 'hapusguru'])->name('hapusguru');

    //Murid Pages
    route::get('/muridadmin', [UIController::class, 'muridadmin'])->name('muridadmin');
    route::get('/tambahmurid', [UIController::class, 'tambahmurid'])->name('tambahmurid');
    route::post('/insertmurid', [UIController::class, 'insertmurid'])->name('insertmurid');
    route::get('/editmurid/{id}', [UIController::class, 'editmurid'])->name('editmurid');
    route::post('/updatemurid/{id}', [UIController::class, 'updatemurid'])->name('updatemurid');
    route::get('/hapusmurid/{id}', [UIController::class, 'hapusmurid'])->name('hapusmurid');
});

Route::group(['middleware' => ['auth', 'ceklevel:guru']], function () {
    Route::get('/guru', [UIGuruController::class, 'guru'])->name('guru');

    //Bimbingan Pribadi Pages
    Route::get('/bimbinganpribadi', [UIGuruController::class, 'bimpribadi'])->name('bimpribadi');
    Route::get('/detailbimpribadi/{id}', [UIGuruController::class, 'detailbimpribadi'])->name('detailbimpribadi');
    Route::get('/editbimpribadi/{id}', [UIGuruController::class, 'editbimpribadi'])->name('editbimpribadi');
    Route::post('/updatebimpribadi/{id}', [UIGuruController::class, 'updatebimpribadi'])->name('updatebimpribadi');
    Route::get('/tambahhasilpribadi/{id}', [UIGuruController::class, 'tambahhasilpribadi'])->name('tambahhasilpribadi');
    Route::post('/inserthasilpribadi/{id}', [UIGuruController::class, 'inserthasilpribadi'])->name('inserthasilpribadi');
    Route::get('/hapusbimpribadi/{id}', [UIGuruController::class, 'hapusbimpribadi'])->name('hapusbimpribadi');

    //Bimbingan Sosial Pages
    Route::get('/bimbingansosial', [UIGuruController::class, 'bimsosial'])->name('bimsosial');
    Route::get('/detailbimsosial/{id}', [UIGuruController::class, 'detailbimsosial'])->name('detailbimsosial');
    Route::get('/editbimsosial/{id}', [UIGuruController::class, 'editbimsosial'])->name('editbimsosial');
    Route::post('/updatebimsosial/{id}', [UIGuruController::class, 'updatebimsosial'])->name('updatebimsosial');
    Route::get('/tambahhasilsosial/{id}', [UIGuruController::class, 'tambahhasilsosial'])->name('tambahhasilsosial');
    Route::post('/inserthasilsosial/{id}', [UIGuruController::class, 'inserthasilsosial'])->name('inserthasilsosial');
    Route::get('/hapusbimsosial/{id}', [UIGuruController::class, 'hapusbimsosial'])->name('hapusbimsosial');

    Route::get('/petakerawanan', [UIGuruController::class, 'petakerawanan'])->name('petakerawanan');

    //Bimbingan Karir Pages
    Route::get('/bimbingankarir', [UIGuruController::class, 'bimkarir'])->name('bimkarir');
    Route::get('/detailbimkarir/{id}', [UIGuruController::class, 'detailbimkarir'])->name('detailbimkarir');
    Route::get('/editbimkarir/{id}', [UIGuruController::class, 'editbimkarir'])->name('editbimkarir');
    Route::post('/updatebimkarir/{id}', [UIGuruController::class, 'updatebimkarir'])->name('updatebimkarir');
    Route::get('/tambahhasilkarir/{id}', [UIGuruController::class, 'tambahhasilkarir'])->name('tambahhasilkarir');
    Route::post('/inserthasilkarir/{id}', [UIGuruController::class, 'inserthasilkarir'])->name('inserthasilkarir');
    Route::get('/hapusbimkarir/{id}', [UIGuruController::class, 'hapusbimkarir'])->name('hapusbimkarir');

    //Bimbingan Pelajar Pages
    Route::get('/bimbinganpelajar', [UIGuruController::class, 'bimpelajar'])->name('bimpelajar');
    Route::get('/detailbimpelajar/{id}', [UIGuruController::class, 'detailbimpelajar'])->name('detailbimpelajar');
    Route::get('/editbimpelajar/{id}', [UIGuruController::class, 'editbimpelajar'])->name('editbimpelajar');
    Route::post('/updatebimpelajar/{id}', [UIGuruController::class, 'updatebimpelajar'])->name('updatebimpelajar');
    Route::get('/tambahhasilpelajar/{id}', [UIGuruController::class, 'tambahhasilpelajar'])->name('tambahhasilpelajar');
    Route::post('/inserthasilpelajar/{id}', [UIGuruController::class, 'inserthasilpelajar'])->name('inserthasilpelajar');
    Route::get('/hapusbimpelajar/{id}', [UIGuruController::class, 'hapusbimpelajar'])->name('hapusbimpelajar');
});

Route::group(['middleware' => ['auth', 'ceklevel:walikelas']], function () {
    route::get('/walikelas', [UIWaliKelasController::class, 'walikelas'])->name('walikelas');

    //Bimbingan Pribadi Pages
    route::get('/bimpribadiwali', [UIWaliKelasController::class, 'bimpribadiwali'])->name('bimpribadiwali');
    route::get('/detailbimpribadiwali/{id}', [UIWaliKelasController::class, 'detailbimpribadiwali'])->name('detailbimpribadiwali');

    //Bimbingan Sosial Pages
    route::get('/bimsosialwali', [UIWaliKelasController::class, 'bimsosialwali'])->name('bimsosialwali');
    route::get('/detailbimsosialwali/{id}', [UIWaliKelasController::class, 'detailbimsosialwali'])->name('detailbimsosialwali');

    //Bimbingan Karir Pages
    route::get('/bimkarirwali', [UIWaliKelasController::class, 'bimkarirwali'])->name('bimkarirwali');
    route::get('/detailbimkarirwali/{id}', [UIWaliKelasController::class, 'detailbimkarirwali'])->name('detailbimkarirwali');

    //Bimbingan Pelajar Pages
    route::get('/bimpelajarwali', [UIWaliKelasController::class, 'bimpelajarwali'])->name('bimpelajarwali');
    route::get('/detailbimpelajarwali/{id}', [UIWaliKelasController::class, 'detailbimpelajarwali'])->name('detailbimpelajarwali');
    Route::get('/tambahhasilpelajarwali/{id}', [UIWaliKelasController::class, 'tambahhasilpelajarwali'])->name('tambahhasilpelajarwali');
    Route::post('/inserthasilpelajarwali/{id}', [UIWaliKelasController::class, 'inserthasilpelajarwali'])->name('inserthasilpelajarwali');
});

Route::group(['middleware' => ['auth', 'ceklevel:murid']], function () {
    Route::get('/murid', [UIMuridController::class, 'murid'])->name('murid');

    //Bimbingan Pribadi Pages
    Route::get('/bimpribadisiswa', [UIMuridController::class, 'bimpribadisiswa'])->name('bimpribadisiswa');
    Route::get('/detailbimpribadisiswa/{id}', [UIMuridController::class, 'detailbimpribadisiswa'])->name('detailbimpribadisiswa');
    Route::get('/tambahbimpribadisiswa', [UIMuridController::class, 'tambahbimpribadisiswa'])->name('tambahbimpribadisiswa');
    Route::post('/insertbimpribadisiswa', [UIMuridController::class, 'insertbimpribadisiswa'])->name('insertbimpribadisiswa');

    //Bimbingan Sosial Pages
    Route::get('/bimsosialsiswa', [UIMuridController::class, 'bimsosialsiswa'])->name('bimsosialsiswa');
    Route::get('/tambahbimsosialsiswa', [UIMuridController::class, 'tambahbimsosialsiswa'])->name('tambahbimsosialsiswa');
    Route::post('/insertbimsosialsiswa', [UIMuridController::class, 'insertbimsosialsiswa'])->name('insertbimsosialsiswa');
    Route::get('/detailbimsosialsiswa/{id}', [UIMuridController::class, 'detailbimsosialsiswa'])->name('detailbimsosialsiswa');

    //Bimbingan Karir Pages
    Route::get('/bimkarirsiswa', [UIMuridController::class, 'bimkarirsiswa'])->name('bimkarirsiswa');
    Route::get('/tambahbimkarirsiswa', [UIMuridController::class, 'tambahbimkarirsiswa'])->name('tambahbimkarirsiswa');
    Route::post('/insertbimkarirsiswa', [UIMuridController::class, 'insertbimkarirsiswa'])->name('insertbimkarirsiswa');
    Route::get('/detailbimkarirsiswa/{id}', [UIMuridController::class, 'detailbimkarirsiswa'])->name('detailbimkarirsiswa');

    //Bimbingan Pelajar Pages
    Route::get('/bimpelajarsiswa', [UIMuridController::class, 'bimpelajarsiswa'])->name('bimpelajarsiswa');
    Route::get('/tambahbimpelajarsiswa', [UIMuridController::class, 'tambahbimpelajarsiswa'])->name('tambahbimpelajarsiswa');
    Route::post('/insertbimpelajarsiswa', [UIMuridController::class, 'insertbimpelajarsiswa'])->name('insertbimpelajarsiswa');
    Route::get('/detailbimpelajarsiswa/{id}', [UIMuridController::class, 'detailbimpelajarsiswa'])->name('detailbimpelajarsiswa');
});
