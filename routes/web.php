<?php

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
    return view('welcome');
})->name("landing");


/* Login and register pages */
    // Login
Route::get('/login', function (){
    return "Login Page for all type of users";
})->name("login");

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
    return "Admin Home page";
})->name("admin-db");

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

