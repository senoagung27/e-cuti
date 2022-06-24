<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('products', ProductController::class);
// });

// Route::get('/', function () {
//     return view('login');
// });

// Auth::routes();

// Route::post('login', 'AuthController@login');
// Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function() {
//     // manggil controller sesuai bawaan laravel 8
//     Route::get('/', 'HomeController@index')->name('home');
// Route::get('/Pegawai', 'PegawaiController@index');
// Route::get('/TambahPegawai', 'PegawaiController@create')->name('pegawai.create');
// Route::post('/SimpanPegawai', 'PegawaiController@store');
// Route::get('/HapusPegawai/{id}', 'PegawaiController@delete');
// Route::get('/EditPegawai/{id}', 'PegawaiController@edit');
// Route::post('/SimpanEditPegawai/{id}', 'PegawaiController@update');




// Route::get('/Cuti', 'CutiController@index');
// Route::get('/TambahCuti', 'CutiController@create')->name('cuti.create');
// Route::post('/SimpanCuti', 'CutiController@store');
// Route::get('/HapusCuti/{id}', 'CutiController@delete');
// Route::get('/EditCuti/{id}', 'CutiController@edit');
// Route::post('/SimpanEditCuti/{id}', 'CutiController@update');
//     Route::post('logout', [AuthController::class, 'logout']);
//     // manggil controller dengan mengubah namespace di RouteServiceProvider.php biar bisa kayak versi2 sebelumnya
//     Route::post('logoutall', 'AuthController@logoutall');
// });



// Route::get('/frontend', 'HomeController@frontend');

/**
 * Home Routes
 */
// Route::get('/', 'HomeController@index')->name('home.index');
// Route::get('/', function () {
//     return view('welcome');

//     Route::get('/login', 'LoginController@show')->name('login.show');
//     Route::post('/login', 'LoginController@login')->name('login.perform');
//     Route::get('/register', 'RegisterController@show')->name('register.show');
//     Route::post('/register', 'RegisterController@register')->name('register.perform');
// });

Route::group(['middleware' => ['guest']], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');


    Route::get('/Pegawai', 'PegawaiController@index');
    Route::get('/TambahPegawai', 'PegawaiController@create')->name('pegawai.create');
    Route::post('/SimpanPegawai', 'PegawaiController@store');
    Route::get('/HapusPegawai/{id}', 'PegawaiController@delete');
    Route::get('/EditPegawai/{id}', 'PegawaiController@edit');
    Route::post('/SimpanEditPegawai/{id}', 'PegawaiController@update');




    Route::get('/Cuti', 'CutiController@index');
    Route::get('/TambahCuti', 'CutiController@create')->name('cuti.create');
    Route::post('/SimpanCuti', 'CutiController@store');
    Route::get('/HapusCuti/{id}', 'CutiController@delete');
    Route::get('/EditCuti/{id}', 'CutiController@edit');
    Route::post('/SimpanEditCuti/{id}', 'CutiController@update');
    Route::post('logout', [AuthController::class, 'logout']);
    Route::get('/logout', 'AuthController@perform')->name('logout.perform');
});

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Routes
     */
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});
