<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function brouillon()
    {
       $alltrips= Trajet::all();

        return view('brouillon',['trips'=>$alltrips]);
    }
}
