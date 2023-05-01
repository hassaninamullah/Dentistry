<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ClientController;
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


Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('/',[AuthController::class,'dashboardLogin'])->name('auth.login');
Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');


Route::middleware('auth')->prefix('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('modules.dashboard.analytics');
    })->name('dashboard.analytics');


    Route::prefix('/administration')->group(function(){
        Route::get('/agents',[AdministrationController::class,'agents'])->name('administration.agent');
        Route::get('/applicants',[AdministrationController::class,'applicants'])->name('administration.applicant');
        Route::get('/system-users',[AdministrationController::class,'systemUsers'])->name('administration.users');
        Route::get('/agency-profiles',[AdministrationController::class,'agencyProfiles'])->name('administration.agency');
        Route::delete('/delete/{id}/{role}',[AdministrationController::class,'destroyAdministrations'])->name('administration.general.delete');
    });
    Route::get('/suppliers', [AdministrationController::class,'suppliers'])->name('suppliers');
    Route::get('/commissions', [AdministrationController::class,'commissions'])->name('commissions');

    Route::prefix('/client')->group(function(){

        Route::get('/listing',[ClientController::class,'index'])->name('client.listing');
        Route::delete('/delete/{id}',[ClientController::class,'destroy'])->name('client.delete');
        Route::post('/add',[ClientController::class,'store'])->name('client.store');

        Route::get('/add', function () {
            return view('modules.client-management.add-update');
        })->name('client.add');

        Route::get('/update/{id}', function () {
            return view('modules.client-management.add-update');
        })->name('client.update');

    });


    Route::prefix('/booking')->group(function(){

        Route::get('/', function () {
            return view('modules.booking-management.trip-listings');
        })->name('booking.listings');

        Route::get('/add', function () {
            return view('modules.booking-management.add-update-proposals');
        })->name('booking.add');
        Route::get('/update/{id}', function () {
            return view('modules.booking-management.add-update-proposals');
        })->name('booking.update');

    });


    Route::prefix('/marketing')->group(function(){

        Route::get('/email-template', function () {
            return view('modules.marketing.email-templates');
        })->name('marketing.email');

        Route::get('/supplier-promotion', function () {
            return view('modules.marketing.supplier-promotion');
        })->name('marketing.supplier');

        Route::get('/agency-promotion', function () {
            return view('modules.marketing.agency-promotion');
        })->name('marketing.agency');

        Route::get('/image-gallery', function () {
            return view('modules.marketing.image-gallery');
        })->name('marketing.image');

    });

    Route::prefix('/help')->group(function(){
        Route::get('/tickets', function () {
            return view('modules.help.ticket');
        })->name('help.ticket');

        Route::get('/tutorials', function () {
            return view('modules.help.tutorials');
        })->name('help.tutorial');

        Route::get('/contact-us', function () {
            return view('modules.help.contact');
        })->name('help.contact');
    });

    Route::get('/reports', function () {
        return view('modules.reports.report');
    })->name('reports');

    Route::get('/forms', function () {
        return view('modules.forms.form');
    })->name('forms');



});


