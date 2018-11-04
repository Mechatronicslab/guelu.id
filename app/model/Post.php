<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;

class Post extends Model
{
    protected $post_list = 'posts';

    public function admin(){
        return $this->belongsTo('App\model\Administrator');
    }
}
