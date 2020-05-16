<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function songs()
    {
        return $this->hasMany(Songs::class);
    }
}
