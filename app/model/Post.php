<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;
use App\model\Categories;

class Post extends Model
{
    protected $post_list = 'posts';
    protected $fillable = array('categories_id','author','thumbnails','title','slug','content','type');

    public function administrator(){
        return $this->belongsTo('App\model\Administrator','author','id');
    }

    public function categories(){
        return $this->belongsTo('App\model\Categories','categories_id','id');
    }

}
