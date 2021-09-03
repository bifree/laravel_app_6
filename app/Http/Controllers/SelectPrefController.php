<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectPrefController extends Controller
{
    public function sample(){
        $prefs = config('prefecture');
        return view('signup')->with(['prefs' => $prefs]);
    }
}
