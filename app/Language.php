<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public $timestamps = false;

    public function uses(){
        return $this->belongsToMany('App\LUse', 'language_use', 'lang_id', 'use_id');
    }

    public function projects(){
        return $this->belongsToMany('App\Project', 'language_project', 'lang_id', 'project_id');
    }

    public function stats(){
        return $this->belongsToMany('App\StatType', 'github_stats', 'lang_id', 'type_id')-> withPivot('quantity');
    }
}
