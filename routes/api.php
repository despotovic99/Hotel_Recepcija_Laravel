<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\GostController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\HotelskaSobaController;
use App\Http\Controllers\RezervacijaController;
use App\Models\Rezervacija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[AuthController::class,'register']);
Route::post('login',[AuthController::class,'login']);

Route::group(['middleware'=>['auth:sanctum']],function (){

    Route::get('/profil',function (Request $request){
        return auth()->user();
    });

    Route::resource('gost',GostController::class)->only(['update','store','destroy']);
    Route::resource('hotel',HotelController::class)->only(['update','store','destroy']);
    Route::resource('hotelska_soba',HotelskaSobaController::class)->only(['update','store','destroy']);
    Route::resource('rezervacija',RezervacijaController::class)->only(['update','store','destroy']);

    Route::post('logout',[AuthController::class,'logout']);

});

