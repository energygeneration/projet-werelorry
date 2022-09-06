<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {


        return view('index');
    }
    public function apropos()
    {
        return view('apropos');
    }
}
