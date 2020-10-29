<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = [];

        $to = null;

        $users = User::all();

        $conversations = Conversation::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();
        return view("doctor.doctormessages")->with("messages", $messages)->with("chats", $conversations)->with("to", $to)->with('users', $users);
    }


    public function messaging(User $user){
        $users = User::all();

        $to=$user;

        $id=$user->id;


        $messages = Message::where(function ($query) use ($id) {
            $query->where('from_id', Auth::id())
                ->where('to_id', $id);
        })->orWhere(function ($query) use ($id) {
            $query->where('to_id', Auth::id())
                ->where('from_id', $id);
        })->orderBy('created_at', 'asc')->orderBy('updated_at', 'asc')->get();



        $conversations = Conversation::where('from_id', Auth::user()->id)->orWhere('to_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();
        return view("doctor.doctormessages")->with("messages", $messages)->with("chats", $conversations)->with("to", $to)->with('users', $users);


    }


public function dmessage(Request $request,User $user){


    $receiver = $user;





        $conversation = Conversation::where(function ($query) use ($user) {
            $query->where('from_id', Auth::id())
                ->where('to_id', $user->id);
        })->orWhere(function ($query) use ($user) {
            $query->where('to_id', Auth::id())->where('to_id', $user->id);
        })->first();

        if ($conversation == null) {

            $conversation = new Conversation();
            $conversation->to_id = $user->id;
            $conversation->from_id = Auth::id();
            $conversation->last_message = $request->message;
            // return $conversation;
            $conversation->save();
        }


        //

        $conversation->last_message = $request->message;

        $conversation->save();

        $message=new Message();


        $message->to_id=$user->id;
        $message->from_id=Auth::id();
        $message->content=$request->input("message");

        $message->save();


        return redirect("/doctor/messages/".$user->id);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function show(Conversation $conversation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function edit(Conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conversation  $conversation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conversation $conversation)
    {
        //
    }
}
