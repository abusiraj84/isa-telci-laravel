<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{

    protected $table = "songs";
    protected $fillable = [
        'title',
        'image',

    ];
    public function albums()
    {
        return $this->belongsTo('App\Albums', 'albums_id');
    }


    public function category()
    {
        return $this->belongsTo(Categories::class, 'category');
    }

    public function yazar()
    {
        return $this->belongsTo(Yazars::class, 'yazar');
    }

    public function seslendiren()
    {
        return $this->belongsTo(Seslendirens::class, 'seslendiren');
    }
}
