<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PosController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Back\StatisticsController;
use App\Http\Controllers\AnimController;

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
    return redirect('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin', 'AdminController@index');
Route::get('/superadmin', 'SuperAdminController@index');

 
Route::resource('poss', PosController::class)->middleware('auth');


 
Route::resource('anims', AnimController::class)->middleware('auth');
 



 
Route::resource('rapports', RapportController::class)->middleware('auth');
Route::get('/search', [PosController::class, 'search']);

Route::resource('users', UserController::class)->middleware('auth');


/*Route::prefix('auth')->middleware('auth')->namespace('Back')->group(function () {
   Route::name('statistics')->get('statistiques/{year}', 'StatisticsController');
});*/
Route::resource('Back', StatisticsController::class)->middleware('auth');