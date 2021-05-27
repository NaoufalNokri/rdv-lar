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
    return view('dashboard');
})->name("landing");


/* Login and register pages */
    // Login
Route::get('/login', function (){
    return view('template.login');
})->name("login page");

Route::post('/login', function (){
    return "Getting login data and authenticate";
});

        // Register - we split it 'cause doctors need to fill more informations about themselves
                // Register Doctor
Route::get('/doctor/register', function (){
    return "Register Page for doctors";
})->name("reg-doc");

                // Register Patient
Route::get('/patient/register', function (){
    return "Register Page for patients";
})->name("reg-doc");


Route::post('/register', function (){
    return "Getting register data and create account";
});



/* Admin Pages */
    // Dashboard
Route::get('/admin', function (){
    return view("admin.adminLanding");
})->name("");

    // Manage Accounts
Route::get('/admin/accounts', function (){
    return "Give the admin rules to manages users (Patients and Doctors) accounts";
})->name("accs");






/*   Doctors pages   */
    // Doctor dashboard
Route::get('/doctor', function (){
    return "Doctor Home page";
})->name("doctor-db");

    // Calendar for each doctor filled with his consultations
Route::get('/doctor/calendar', function (){
    return "Doctor Calendar";
})->name("calendar");

    // Consultation page, it's where he filled the details abt patient visite
Route::get('/doctor/consultation/{id}', function ($id){
   return "You're doing the consultation $id";
})->name("cons-id");

    // The history of all the consultations he did
Route::get('/doctor/consultations', function (){
    return "You have done 155555555 consultation";
})->name("cons");

    // Doctor profile
Route::get('/doctor/{id}',function ($id){
    return "Hi Doctor $id";
})->name("doc-prof");


/*   Patient pages   */

    // Home page where he can fix a RDV
Route::get('/patient', function (){
    return "Patient Choose a consultation";
})->name("rdv-res");

    // Show all RDVs
Route::get('/patient/history', function (){
    return "You have 51 RDVs";
})->name("rdvs");

    // Patient profile
Route::get('patient/{id}',function ($id){
    return "Hi patient $id";
})->name("pat-prof");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
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
});

