<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;
use App\model\Categories;

class Post extends Model
{
    protected $post_list = 'posts';

    public function administrator(){
        return $this->belongsTo('App\model\Administrator','author','id');
    }

    public function categories(){
        return $this->belongsTo('App\model\Categories','categories_id','id');
    }

}
