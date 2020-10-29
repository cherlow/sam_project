<?php

namespace App\Http\Controllers;

use App\Models\Emergency;
use App\Models\Responder;
use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emergencies= auth()->user()->emergencies;

        return view("user.emergencies")->with("emergencies",$emergencies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.emergencycreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $emergency=new Emergency();

       $emergency->user_id=$request->input("user_id");
       $emergency->mobile=$request->input("mobile");
       $emergency->location=$request->input("location");
       $emergency->details=$request->input("details");
       $emergency->status=0;
     $emergency->save();

    // toatr here


    return redirect("/user/emergency");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function show(Emergency $emergency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function edit(Emergency $emergency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emergency $emergency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Emergency  $emergency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emergency $emergency)
    {
        //
    }


    public function adminemergency(){


         $emergencies=Emergency::where("status",0)->get();



         return view("admin.adminemergency")->with("emergencies",$emergencies);
    }


    public function adminemergencyshow(Emergency $emergency){

$responders=Responder::all();
        return view("admin.adminemergencydetails")->with("emergency",$emergency)->with("responders",$responders);
    }


    public function addresponder(Request $request,Emergency $emergency){

        // check if this responder has an active session



 $responder=Responder::find($request->input("responder"));

  $emergencies=$responder->emergencies->where("status",0);

  if($emergencies){

   $emergency->responder_id=$responder->id;

   $emergency->save();

//    toastr succes

   return redirect("/admin/emergency");
  }
  else{




    // toastr error


    return redirect()->back();

  }


    }

    public function finishemergency(Emergency $emergency){


        $emergency->status=1;
        $emergency->save();

        return redirect("/admin/emergency");



    }
}
