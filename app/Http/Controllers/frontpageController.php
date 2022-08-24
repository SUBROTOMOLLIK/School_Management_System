<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontpageController extends Controller
{
    public function frontpage()
    {
        return view('frontpage');
    }
}
