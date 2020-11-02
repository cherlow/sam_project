@extends('layouts.userlayout')

@section('content')
<div id="content">
    <!-- Top Navigation -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="responsive-logo">
                <a href="index.html"><img src="images/logo-dark.png" class="logo" alt="logo"></a>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <span class="ti-menu" id="sidebarCollapse"></span>
                </li>



                <li class="nav-item">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <span class="ti-user"></span>
                    </a>
                    <div class="dropdown-menu proclinic-box-shadow2 profile animated flipInY">
                        <h5>{{ auth()->user()->name }}</h5>


                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="ti-power-off"></span> Logout</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <!-- /Top Navigation -->
    <!-- Breadcrumb -->
    <!-- Page Title -->
    <div class="row no-margin-padding">
        <div class="col-md-6">
            <h3 class="block-title"> User Messages</h3>
        </div>
        <div class="col-md-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="ti-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active"> User Messages</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">


        <h3 class=" text-center">Messaging</h3>
        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                            <h4>Recent</h4>
                        </div>

                    </div>
                    <div class="inbox_chat">

                        @foreach ($chats as $chat)


                        @if ($chat->from_id != auth()->user()->id)
                        <a href="/user/messages/{{$users->where('id',$chat->from_id)->first()->id }}">
                            <div class="chat_list active_chat">
                                <div class="chat_people">
                                    <div class="chat_ib">


                                        <h5>
                                            @if ($chat->from_id != auth()->user()->id)

                                            {{$users->where('id',$chat->from_id)->first()->name  }}

                                            @else

                                            {{$users->where('id',$chat->to_id)->first()->name  }}

                                            @endif


                                            <span class="chat_date">{{ $chat->updated_at->diffForHumans() }}</span></h5>


                                        <p>{{ $chat->last_message }}</p>
                                    </div>
                                </div>
                            </div>

                        </a>

                        @else


                        <a href="/user/messages/{{$users->where('id',$chat->to_id)->first()->id }}">
                            <div class="chat_list active_chat">
                                <div class="chat_people">
                                    <div class="chat_ib">


                                        <h5>
                                            @if ($chat->from_id != auth()->user()->id)

                                            {{$users->where('id',$chat->from_id)->first()->name  }}

                                            @else

                                            {{$users->where('id',$chat->to_id)->first()->name  }}

                                            @endif


                                            <span class="chat_date">{{ $chat->updated_at->diffForHumans() }}</span></h5>


                                        <p>{{ $chat->last_message }}</p>
                                    </div>
                                </div>
                            </div>

                        </a>



                        @endif

                        @endforeach






                    </div>
                </div>


                @if ($to !=null)
                <div class="mesgs">

                    <div class="msg_history">


                        @foreach ($messages as $message)

                        @if ($message->from_id==auth()->user()->id)

                        <div class="incoming_msg">
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>{{ $message->content }}</p>
                                    <span class="time_date">{{$message->created_at->diffForHumans()}}</span>
                                </div>
                            </div>
                        </div>



                        @else

                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>{{ $message->content }}</p>
                                <span class="time_date">{{$message->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                        @endif


                        @endforeach





                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <form action="/dmessage/post/{{$to->id}}">
                                @csrf
                                <input type="text" class="write_msg" placeholder="Type a message" name="message"
                                    required />
                                <button class="msg_send_btn" type="submit"><i class="ti-comment"
                                        aria-hidden="true"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>



    </div>
</div>
@endsection