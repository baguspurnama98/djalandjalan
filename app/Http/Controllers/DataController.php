<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class DataController extends Controller
{
    public function landing(){
        $trip = Trip::with(['user','place'])->take(4)->get();
        return view('landing', ['trip' => $trip]);
    }

    public function partner(){
        $trip = Trip::with(['user','place'])->get();
        return view('landing', ['trip' => $trip]);
    }
}
