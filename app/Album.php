<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = array('name', 'description', 'cover_image');
    public function Photos()
    {
        return $this->hasMany('App\Photo');
    }
}
