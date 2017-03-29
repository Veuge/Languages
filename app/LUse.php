<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LUse extends Model
{
    public $timestamps = false;

    public function languages(){
        return $this->belongsToMany('App\Language', 'language_use', 'use_id', 'lang_id');
    }
}
