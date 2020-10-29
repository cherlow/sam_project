<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {

        $patients = User::where("role", 1)->get();


        return view("doctor.patients")->with('patients', $patients);
    }

    public function dpatientdetails(User $user)
    {

        return view("doctor.patientdetails")->with("user", $user);
    }

    public function adminpatients()
    {
        $patients = User::where("role", 1)->get();
        return view("admin.patients")->with("patients", $patients);
    }


    public function apatientdetails(User $user)
    {
        return view("admin.patientdetails")->with("user", $user);

    }
}
