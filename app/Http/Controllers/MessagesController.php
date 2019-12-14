<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    //
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        //create a new message
        $message = new Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save message
        $message->save();
        //redirect
        return redirect('/')->with('success','Message Sent');
    }

    public function messages(){
        $messages = Message::orderBy('created_at','desc')->paginate(4);
        return view('messages',[
            'messages' => $messages
        ]);
    }
}
