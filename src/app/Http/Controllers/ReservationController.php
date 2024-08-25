<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        return view('index');
    }
     public function thanks()
    {
        return view('thanks');
    }
    
    public function done()
    {
        return view('done');
    }
}
