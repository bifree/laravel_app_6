<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        //ログインユーザ自身に通知する
        // $user = \Auth::user();
        // $user->notify(new \App\Notifications\RecievedMessages($user));
        
        return view('welcome');
    }
}
