<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
public function index(){

    $patients=User::where("role",1)->get();


    return view("doctor.patients")->with('patients',$patients);
}
}
