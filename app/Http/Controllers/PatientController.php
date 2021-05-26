<?php

namespace App\Http\Controllers;

class PatientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('patient.patientAcueil');
    }
    public function rendezVous()
    {
        return view('patient.rendezVous');
    }
}
