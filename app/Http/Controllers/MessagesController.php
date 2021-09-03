<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('messages.main');
    }
    
    // public function store(){
    //     $request -> validate([
    //         'body' => 'required',
    //         ]);
            
    //     $message = new Message();
    //     $message -> body = $request -> body;
    //     $message -> user_id = \Auth::id();
    //     $message -> save();
        
    //     return back();
    // }
    
    // public function destroy($message_id){
    //     $message = Message::findOrFail($message_id);
        
    //     \DB::transaction(function() use ($message){
    //         $message->delete();
    //     });
        
    //     return back();
    // }
}
