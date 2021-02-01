<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserInfo;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Refresh;
//portofolio
use App\Http\Controllers\portofolio\SertifikasiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'portofolio','middleware' => 'auth:api'],function(){
	Route::resource('sertifikasi',SertifikasiController::class);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//auth
Route::group(['prefix' => 'auth'],function(){
	Route::post('register', RegisterController::class);
	Route::post('login', LoginController::class);
	Route::get('user', UserInfo::class);
	Route::post('logout',Logout::class);
	Route::post('refresh',Refresh::class);
});


Route::group(['prefix' => 'portofolio','middleware' => 'auth:api'],function(){
	Route::resource('sertifikasi',SertifikasiController::class);
});

