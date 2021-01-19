<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientProdukController;



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
Route::get('template', function(){
    return view('template.base');
});
Route::get('templateclient', function(){
    return view('templateclient.base');
});

Route::get('tentang', [HomeController::class, 'showTentang']);
Route::get('kontak', [HomeController::class, 'showKontak']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
Route::get('show-ajax', [HomeController::class, 'showAjax']);

//authetication
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegistration']);
Route::post('register', [AuthController::class, 'registerProcess']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('user/filter',[UserController::class, 'filter']);   
    Route::post('produk/filter',[ProdukController::class, 'filter']);  
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
    Route::get('beranda', [HomeController::class, 'showBeranda']);
    Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);
    Route::get('show-ajax', [HomeController::class, 'showAjax']);

});
Route::prefix('user')->group(function(){
    Route::post('client/filter',[ClientProdukController::class, 'filter']);
    Route::get('client', [ClientProdukController::class, 'index']);
    Route::get('client/{produk}', [ClientProdukController::class, 'show']);
    Route::get('alamat', [ClientController::class, 'showAlamat']);


});