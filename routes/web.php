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
Route::get('/', [garageController::class, 'getServices'])->name('home.site');
# CLIENT AUTH ROUTES
Route::view('/garage-apply', 'applygarage');
Route::view('/signup', 'clientsignup');
Route::post('/signup', [clientController::class, 'createClient'])->name('clientsignup');
Route::view('/signin', 'clientsignin')->name('clientsign');
Route::post('/signin', [ClientAuthController::class, 'login'])->name('clientsignin');

# GARAGE SERVICE UPFRONT
Route::get('/garage-apply', [garageController::class, 'garageSignupInfo']);
Route::post('/garage-apply', [garageController::class, 'createGarage'])->name('garagecreate');

# ADMIN LOGIN ROUTES
Route::view('/auth/admin', 'administrator/login');
Route::post('/auth/admin', [AdminAuthController::class, 'login'])->name('admin.loginfunction');

#MANAGER AUTH ROUTES
Route::view('/auth/manager', 'manager/login');
Route::post('/auth/manager', [ManagerAuthController::class, 'login'])->name('managerLogin');

#admin auth middleware
Route::group(['middleware' => ['auth:admin']], function () {

    Route::view('/admin', "administrator/home")->name('admin.home');
    Route::view('/applications', "administrator/garageapplies")->name('admin.applications');
    Route::view('/garages', "administrator/garages");
    Route::view('/clients', "administrator/client");
    Route::view('/allcars', "administrator/carse");
    Route::view('/payments-history', "administrator/payments");
    Route::view('/requests-service', "administrator/requests");

    Route::get('/applications', [garageController::class, 'getGarages']);
    Route::get('/garages', [garageController::class, 'getApprovedGarages']);
    Route::get('/clients', [clientController::class, 'getClients']);
    Route::get('/downloadsector/{file}', [garageController::class, 'downloadSector']);
    Route::get('/downloadrdb/{file}', [garageController::class, 'downloadRdb']);
    Route::get('/confirmgarage/{garage}', [garageController::class, 'confirmGarage']);
    Route::get('/rejectgarage/{garage}', [garageController::class, 'rejectGarage']);
    Route::get('/allcars', [CarController::class, 'getCars']);
    Route::get('/payments-history', [clientController::class, 'paymentsHistory']);
    Route::get('/requests-service', [clientController::class, 'clientsRequests']);
    Route::get('/admin', [clientController::class, 'AdminAnalytics']);
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});


# garage manager auth middleware routes
Route::group(['middleware' => ['auth:manager']], function () {
    Route::view('/mechanics', "manager/mechanics");
    Route::view('/manager', "manager/home")->name('manager.home');
    Route::get('/manager', [garageController::class, 'analytics']);
    Route::view('/my-service', "manager/myservices");
    Route::view('/service-map', "manager/myservices-map");

    Route::post('/mechanics', [MechanicsController::class, 'create'])->name('createmechanician');
    Route::post('/my-service', [MechanicsController::class, 'AssignMechanics'])->name('assign-mechanic');

    Route::get('/mechanics', [MechanicsController::class, 'getMechnanics']);
    Route::get('/service-map', [clientController::class, 'garageServiceRequests1']);
    Route::get('/my-service', [clientController::class, 'garageServiceRequests']);
    Route::get('/manager/logout', [ManagerAuthController::class, 'logout'])->name('manager.logout');
});


# client auth middleware routes
Route::group(['middleware' => ['auth:client']], function () {
    Route::view('/client', 'home');
    Route::get('/client', [garageController::class, 'getServices']);
    Route::view('/authdashboard', 'client/dashboard')->name('client.home');
    Route::view('/service/{service}', 'client/single-service');
    Route::view('/mycars', 'client/cars');
    Route::view('/service-request/{garage}', 'client/request-serv');
    Route::view('/pay', 'client/payservice');
    Route::view('/myrequests', 'client/requested');

    Route::get('/authdashboard', [clientController::class, 'analytics']);
    Route::get('/client/logout', [ClientAuthController::class, 'logout'])->name('client.logout');
    Route::get('/mycars', [CarController::class, 'getCarsByClient']);
    Route::get('/service/{service}', [garageController::class, 'getService'])->name('amagarage');
    Route::get('/service-request/{garage}', [CarController::class, 'getCarsByClient1']);
    Route::get('/rave/callback', [FlutterwaveControler::class, 'callback'])->name('callback');
    Route::get('/myrequests', [clientController::class, 'clientRequests']);


    Route::post('/mycars', [CarController::class, 'store'])->name('createcar');
    Route::post('/service-request/{garage}', [clientController::class, 'requestService']);
    Route::post('/pay', [FlutterwaveControler::class, 'initialize'])->name('pay');
    Route::post('/myrequests', [MechanicsController::class, 'confirmService'])->name('confirm-service');
});
