<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\ManagerAuthController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\garageController;
use App\Http\Controllers\MechanicsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

# register routes
Route::view('garage-apply/','applygarage');
Route::view('signup','clientsignup');
Route::post('signup',[clientController::class,'createClient'])->name('clientsignup');
Route::get('/',[garageController::class,'getServices']);
Route::get('garage-apply',[garageController::class,'garageSignupInfo']);
Route::post('garage-apply',[garageController::class,'createGarage'])->name('garagecreate');

# login routes
Route::get('/auth/admin',[AdminAuthController::class,'showLoginForm'])->name('login');
Route::post('/auth/admin', [AdminAuthController::class, 'login'])->name('admin.loginfunction');
Route::get('/auth/manager',[ManagerAuthController::class,'showLoginForm']);
Route::post('/auth/manager', [ManagerAuthController::class, 'login'])->name('managerLogin');


#admin auth middleware
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::view('admin/', "administrator/home")->name('admin.home');
    Route::view('applications/', "administrator/garageapplies")->name('admin.applications');
    Route::view('garages/', "administrator/garages");
    Route::view('clients/', "administrator/client");
    Route::get('applications/',[garageController::class,'getGarages']);
    Route::get('garages/',[garageController::class,'getApprovedGarages']);
    Route::get('clients/',[clientController::class,'getClients']);
    Route::get('downloadsector/{file}',[garageController::class,'downloadSector']);
    Route::get('downloadrdb/{file}',[garageController::class,'downloadRdb']);
    Route::get('confirmgarage/{garage}',[garageController::class,'confirmGarage']);
    Route::get('rejectgarage/{garage}',[garageController::class,'rejectGarage']);
});


# garage manager auth middleware routes
Route::group(['middleware' => ['auth:manager']], function () {
    Route::get('/manager/logout', [ManagerAuthController::class, 'logout'])->name('manager.logout');
    Route::view('manager/', "manager/home")->name('manager.home');
    Route::view('mechanics/', "manager/mechanics");
    Route::get('mechanics/',[MechanicsController::class,'getMechnanics']);
    Route::post('mechanics/', [MechanicsController::class, 'create'])->name('createmechanician');
});