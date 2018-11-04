<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $administrator_list = 'administrators';

    public function post() {
        return $this->hasMany('App\model\Post');
    }
}
