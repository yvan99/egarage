<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\garageController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::view('garage-apply','applygarage');
Route::view('signup','clientsignup');
Route::post('signup',[clientController::class,'createClient'])->name('clientsignup');
Route::get('/',[garageController::class,'getServices']);
Route::get('garage-apply',[garageController::class,'garageSignupInfo']);
Route::post('garage-apply',[garageController::class,'createGarage'])->name('garagecreate');

Route::get('/auth/admin',[AdminAuthController::class,'showLoginForm'])->name('login');
Route::post('/auth/admin', [AdminAuthController::class, 'login'])->name('admin.loginfunction');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

#admin auth middleware
Route::group(['middleware' => ['auth:admin']], function () {
    Route::view('admin/', "administrator/home")->name('admin.home');
});