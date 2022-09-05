<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
       $alltrips= Trip::all();

        return view('index',['trips'=>$alltrips]);
    }
    public function apropos()
    {
        return view('apropos');
    }
}
