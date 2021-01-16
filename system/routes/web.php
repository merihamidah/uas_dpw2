<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;



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
Route::get('beranda', [HomeController::class, 'showBeranda']);

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
});