<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Post;

class Administrator extends Model
{
    protected $administrator_list = 'administrators';

    public function post() {
        return $this->hasOne('App\model\Post','categories_id','id');
    }

}
