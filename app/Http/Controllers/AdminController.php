<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function adminLand(){
        return view('admin.adminLanding');
    }
    function addDoctor(){
        return view('admin.addDoctor');
    }
}
