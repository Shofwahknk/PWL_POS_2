<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
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

Route::get('/level',[levelController::class, 'index']);
Route::get('/kategori',[KategoriController::class, 'index']);
Route::get('/user',[UserController::class, 'index']);

Route::get('/user/tambah', [UserController::class, 'tambah'])->name('user/tambah');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan'])->name('user/tambah_simpan');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

//jobheet 5
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');

Route::get('/kategori/update/{id}', [KategoriController::class, 'update'])->name('/kategori/update');
Route::put('/kategori/save_update/{id}', [KategoriController::class, 'save_update'])->name('/kategori/save_update');

Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('/kategori/delete');

Route::get('/', [WelcomeController::class,'index']);

Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');

Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');


// Kita atur juga untuk middleware menggunakan group pada routing
// Didalamnya terdapat group untuk mengecek kondisi login
// jika user yang loogin merupakan admin maka akan diarahkan ke admincontroller
// jika user yang loogin merupakan manager maka akan diarahkan ke usercontroller

Route::group(['middleware'=>['auth']],function(){
    Route::group(['middleware'=>['cek_login:1']],function(){
        Route::resource('admin',AdminController::class);
    });
    Route::group(['middleware'=>['cek_login:2']],function(){
        Route::resource('manager',ManagerController::class);
});
});