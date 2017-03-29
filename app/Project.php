<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;

    public function languages() {
        return $this->belongsToMany('App\Language')
    }
}
