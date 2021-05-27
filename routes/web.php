<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});




Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    //admin routes
    Route::get('admin/adminLanding', ['as' => 'admin.adminLanding', 'uses' => 'App\Http\Controllers\AdminController@adminLand']);
    Route::get('admin/addDoctor', ['as' => 'admin.addDoc', 'uses' => 'App\Http\Controllers\AdminController@addDoctor']);
    Route::get('admin/displayDoctors', ['as' => 'admin.dispDocc', 'uses' => 'App\Http\Controllers\AdminController@displayDoctors']);
    Route::get('admin/consultations', ['as' => 'admin.consultations', 'uses' => function(){return view('admin.consultations');}]);
    Route::get('admin/statistiques', ['as' => 'admin.stats', 'uses' => function(){return view('admin.statistics');}]);
    Route::get('admin/addPatient', ['as' => 'admin.addPat', 'uses' => function(){return view('admin.addPatient');}]);
    Route::get('admin/displayPatients', ['as' => 'admin.dispPat', 'uses' => function(){return view('admin.displayPatients');}]);

    
    Route::get('patient/', ['as' => 'patient.patientAcueil', 'uses' => 'App\Http\Controllers\PatientController@index']);
    Route::get('patient/rendezVous', ['as' => 'patient.rendezVous', 'uses' => 'App\Http\Controllers\PatientController@rendezVous']);

});

