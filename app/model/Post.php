<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;
use App\model\User;
use App\model\Categories;
use App\model\Comment;

class Post extends Model
{
    protected $post_list = 'posts';
    protected $fillable = array('categories_id','author','thumbnails','title','slug','content','type');

    public function administrator(){
        return $this->belongsTo('App\model\Administrator','author','id');
    }

    public function user(){
        return $this->belongsTo('App\model\User','author','id');
    }

    public function categories(){
        return $this->belongsTo('App\model\Categories','categories_id','id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
