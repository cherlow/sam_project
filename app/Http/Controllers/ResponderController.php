<?php

namespace App\Http\Controllers;

use App\Models\Responder;
use Illuminate\Http\Request;

class ResponderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $responders=Responder::all();

        return view("admin.responders")->with("responders",$responders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.responderscreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    $responder=new Responder();
    $responder->name=$request->input("name");
    $responder->mobile=$request->input("mobile");
    $responder->email=$request->input("email");
    $responder->specialisation=$request->input("specialisation");
    $responder->details=$request->input("details");

    $responder->save();

    return redirect("/responders/index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function show(Responder $responder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function edit(Responder $responder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Responder $responder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Responder  $responder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Responder $responder)
    {
        //
    }
}
