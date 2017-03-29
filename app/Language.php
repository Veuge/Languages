<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $timestamps = false;

    public function uses(){
        return $this->belongsToMany('App\Use', 'language_use', 'lang_id', 'use_id');
    }
}
