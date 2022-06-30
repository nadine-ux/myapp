<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\Userscontroller;
use App\Http\Controllers\api\rapportscontroller;
use App\Http\Controllers\api\problemescontroller;
use App\Http\Controllers\api\localisationscontroller;
use App\Http\Controllers\api\vendeurscontroller;
use App\Http\Controllers\api\posController;


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
Route::middleware('auth:api')->prefix('v1')->group(function(){

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::apiresource('/users', Userscontroller::class);
    Route::apiresource('/rapport', rapportscontroller::class);
    Route::apiresource('/probleme', problemescontroller::class);
    Route::apiresource('/localisation', localisationscontroller::class);
    Route::apiresource('/vendeur', vendeurscontroller::class);
    Route::apiresource('/pos', posController::class);

});
/*Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function (Request $request) {
    return $request->user();
});
});*/
