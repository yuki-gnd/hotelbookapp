<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function add()
    {
        return view('hotel.guest');
    }

    public function create(Request $request)
    {
        $this->validate($request, Guest::$rules);
        $guest = new Guest;
        $form = $request->all();
        unset($form['_token']);
        $guest->fill($form)->save();
        return redirect('/guest');
    }

}
