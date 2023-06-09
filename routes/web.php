<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UIController;
use App\Http\Controllers\UIGuruController;

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
    Route::get('/jadwalguru', [UIGuruController::class, 'jadwalguru'])->name('jadwalguru');
    Route::get('/bimbinganpribadi', [UIGuruController::class, 'bimpribadi'])->name('bimpribadi');
    Route::get('/bimbingansosial', [UIGuruController::class, 'bimsosial'])->name('bimsosial');
    Route::get('/peminatankarir', [UIGuruController::class, 'minatkarirguru'])->name('minatkarirguru');
});

Route::group(['middleware' => ['auth', 'ceklevel:walikelas']], function () {
    route::get('/walikelas', [UIController::class, 'walikelas'])->name('walikelas');
});

Route::group(['middleware' => ['auth', 'ceklevel:murid']], function () {
    Route::get('/murid', [UIController::class, 'murid'])->name('murid');
});
