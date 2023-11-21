<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all();
        return view('hotel.home', ['guests' => $guests]);
    }

    public function add()
    {
        return view('hotel.guest');
    }

    public function create(Request $request)
    {   
        // $guests = new Guest();
        // $guests->fill($request->all())->save();

        $guest = [
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel
        ];
            DB::table('guests')->insert($guest);
            return redirect('hotel/guest');

        // $this->validate($request, Guest::$rules);
        // $guest = new Guest;
        // $form = $request->all();
        // unset($form['_token']);
        // $guest->fill($form)->save();
    }

}
