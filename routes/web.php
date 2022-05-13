<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\Auth\ManagerAuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\FlutterwaveControler;
use App\Http\Controllers\garageController;
use App\Http\Controllers\MechanicsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
# register routes
Route::view('garage-apply/', 'applygarage');
Route::view('signup', 'clientsignup');
Route::view('signin', 'clientsignin');

Route::post('signup', [clientController::class, 'createClient'])->name('clientsignup');

Route::get('/', [garageController::class, 'getServices']);
Route::get('garage-apply', [garageController::class, 'garageSignupInfo']);
Route::post('garage-apply', [garageController::class, 'createGarage'])->name('garagecreate');

# login routes
Route::get('/auth/admin', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth/admin', [AdminAuthController::class, 'login'])->name('admin.loginfunction');
Route::get('/auth/manager', [ManagerAuthController::class, 'showLoginForm']);
Route::post('/auth/manager', [ManagerAuthController::class, 'login'])->name('managerLogin');
Route::get('/signin', [ClientAuthController::class, 'showLoginForm']);
Route::post('signin', [ClientAuthController::class, 'login'])->name('clientsignin');


#admin auth middleware
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::view('admin/', "administrator/home")->name('admin.home');
    Route::view('applications/', "administrator/garageapplies")->name('admin.applications');
    Route::view('garages/', "administrator/garages");
    Route::view('clients/', "administrator/client");
    Route::get('applications/', [garageController::class, 'getGarages']);
    Route::get('garages/', [garageController::class, 'getApprovedGarages']);
    Route::get('clients/', [clientController::class, 'getClients']);
    Route::get('downloadsector/{file}', [garageController::class, 'downloadSector']);
    Route::get('downloadrdb/{file}', [garageController::class, 'downloadRdb']);
    Route::get('confirmgarage/{garage}', [garageController::class, 'confirmGarage']);
    Route::get('rejectgarage/{garage}', [garageController::class, 'rejectGarage']);
});


# garage manager auth middleware routes
Route::group(['middleware' => ['auth:manager']], function () {
    Route::get('/manager/logout', [ManagerAuthController::class, 'logout'])->name('manager.logout');
    Route::view('manager/', "manager/home")->name('manager.home');
    Route::view('mechanics/', "manager/mechanics");
    Route::get('mechanics/', [MechanicsController::class, 'getMechnanics']);
    Route::post('mechanics/', [MechanicsController::class, 'create'])->name('createmechanician');
});


# client auth middleware routes
Route::group(['middleware' => ['auth:client']], function () {
    Route::view('/authdashboard', 'client/dashboard')->name('client.home');
    Route::get('/client/logout', [ClientAuthController::class, 'logout'])->name('client.logout');
    Route::view('/mycars', 'client/cars');
    Route::post('/mycars', [CarController::class, 'store'])->name('createcar');
    Route::get('/mycars', [CarController::class, 'getCarsByClient']);
    Route::view('service/{service}', 'client/single-service');
    Route::get('service/{service}', [garageController::class, 'getService']);
    Route::view('district/{district}', 'client/singledistrict');
    Route::get('district/{district}', [garageController::class, 'getDistrict']);
    Route::view('/service-request/{garage}', 'client/request-serv');
    Route::get('/service-request/{garage}', [CarController::class, 'getCarsByClient1']);
    Route::post('/service-request/{garage}', [clientController::class, 'requestService']);
    Route::view('/pay','client/payservice');
    // The route that the button calls to initialize payment
    Route::post('/pay', [FlutterwaveControler::class, 'initialize'])->name('pay');
    // The callback url after a payment
    Route::get('/rave/callback', [FlutterwaveControler::class, 'callback'])->name('callback');
});
