<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $guarded = array('guest_id');

    public static $rules = array
    (
        'name' => 'required',
        'address' => 'required',
        'phone' => 'integer'
    );

    public function getData()
    {
        return $this->name . ':' . $this->address . ':' . $this->phone;
    }
}
