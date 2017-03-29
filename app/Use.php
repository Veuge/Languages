<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Use extends Model
{
    public $timestamps = false;

    public function uses(){
        return $this->belongsToMany('App\Language');
    }
}
