<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;
use App\model\User;
use App\model\Categories;
use App\model\Comments_stories;

class Stories extends Model
{
    protected $post_list = 'stories';
    protected $fillable = array('title','slug','content','author','status');

    public function user(){
        return $this->belongsTo('App\model\User','author','id');
    }

    public function categories(){
        return $this->belongsTo('App\model\Categories','categories_id','id');
    }

    public function comments(){
        return $this->hasMany(Comments_stories::class);
    }
}
