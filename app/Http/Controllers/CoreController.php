<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function Dasboard()
    {
        return view('core.dashboard');
    }    
}
