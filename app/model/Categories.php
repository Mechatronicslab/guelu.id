<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\model\Categories;
use App\model\Post;

class Categories extends Model
{
    protected $kategori_list = 'categories';

    public function post(){
        return $this->hasOne('App\model\Post','categories_id','id');
    }

}
