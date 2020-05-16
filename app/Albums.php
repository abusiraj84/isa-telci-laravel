<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{


    public function songs()
    {
        return $this->hasMany('App\Songs', 'albums_id')->with('category')->with('yazar')->with('seslendiren');
    }
}
