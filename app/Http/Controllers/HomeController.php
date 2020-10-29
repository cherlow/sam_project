<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Emergency;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        if (auth()->user()->role == 3) {
            $patients = User::where("role", 1)->get();
            $doctors = User::where("role", 2)->get();
            $emergencies = Emergency::all();
            $pending = Emergency::where("status", 0)->get();


            return view("admin.home")->with("patients", $patients)->with("doctors", $doctors)->with("emergencies", $emergencies)->with("pending", $pending);
        } elseif (
            auth()->user()->role == 2
        ) {

            $patients = User::where("role", 1)->get();
            $appointments = Appointment::where("doctor_id", auth()->user()->id)->get();
            $pending = Appointment::where("doctor_id", auth()->user()->id)->where("status", 0)->get();
            return view("doctor.home")->with("appointments", $appointments)->with("patients", $patients)->with("pending", $pending);
        } else {

            $doctors = User::where("role", 2)->get();
            return view("user.home")->with("doctors", $doctors);
        }
    }
}
