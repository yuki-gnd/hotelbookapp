<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelbookappController extends Controller
{
    public function index()
    {
        return view('hotel.home');
    }
}
