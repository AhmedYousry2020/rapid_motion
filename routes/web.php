<?php

use App\Http\Controllers\GalaryController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::controller(SiteController::class)->group(function(){
    Route::get('/','index');
    Route::get('/contact','contact');
    Route::get('/about-us','about');
    Route::get('/services','services');
    Route::get('/clients','clients');
    Route::get('/register','register');
    Route::post('/contact-us','contactUs');

});


Route::controller(GalaryController::class)->group(function(){

    Route::get('/galary-view','index');
    Route::post('image-view','store');
});


