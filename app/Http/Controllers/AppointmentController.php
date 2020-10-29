<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $doctors = User::where("role", 2)->get();
        return view("user.appointmentcreate")->with("doctors", $doctors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $appointments = Appointment::where("doctor_id", $request->input("doctor"))->where("time_slot", $request->input("time_slot"))->where("date", $request->input("date"))->get();


        if (count($appointments) > 0) {

            // throw a duplicate error

            return redirect()->back();
        } else {

            $appointment = new Appointment();

            $appointment->user_id = $request->input("user_id");

            $appointment->doctor_id = $request->input("doctor");
            $appointment->date = $request->input("date");
            $appointment->time_slot = $request->input("time_slot");
            $appointment->details = $request->input("details");

            $appointment->save();

            return redirect("/user/appointments/" . auth()->user()->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
    public function userappointments(User $user)
    {

        $appointments = $user->appointments;

        return view("user.appointments")->with("appointments", $appointments);
    }


    public function dappointment()
    {



        $appointments = Appointment::where("doctor_id", Auth::id())->where("status", 0)->get();

        return view("doctor.appointments")->with("appointments", $appointments);
    }

    public function dappointmentdetails(Appointment $appointment)
    {

        return view("doctor.appointmentdetails")->with("appointment", $appointment);
    }

    public function addnotes(Request $request, Appointment $appointment)
    {


        $appointment->status = 1;
        $appointment->notes = $request->input("notes");

        $appointment->save();


        return redirect("/doctor/appointments");
    }


    public function userappointmentdetails(Appointment $appointment)
    {



        return view("user.appointmentdetails")->with("appointment", $appointment);
    }


    public function aappointmentdetails(Appointment $appointment)
    {

        return view("admin.appointmentdetails")->with("appointment", $appointment);
    }

    public function aappointments()
    {

        $appointments = Appointment::all();

        return view("admin.appointments")->with("appointments", $appointments);
    }
}
