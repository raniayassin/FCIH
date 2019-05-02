<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;
class showController extends Controller
{
    //
     public function index()
    {
        return view('showtracks');
    }
}
