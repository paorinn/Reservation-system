<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function thanks()
    {
        return view('thanks');
    }
    
    public function done()
    {
        return view('done');
    }
}
