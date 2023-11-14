<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function add()
    {
        return view('hotel.guest');
    }

    public function create(Request $request)
    {   
        $user = new Guest();
        $user->fill($request->all())->save();

        $param = [
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone
        ];
            DB::insert('insert into guests(name, address, phone) values (:name, :address, :phone)', $param);

        // $this->validate($request, Guest::$rules);
        // $guest = new Guest;
        // $form = $request->all();
        // unset($form['_token']);
        // $guest->fill($form)->save();
        return redirect('guest');
    }

}
