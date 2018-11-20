<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;
use App\model\User;
use App\model\Post;
use App\model\Stories;
use App\model\Categories;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = array('first_name','last_name','full_name','username','photos','email','password', 'remember_token', 'level=');    

    public function post() {
        return $this->hasOne('App\model\Post','author','id');
    }

    public function ceritas() {
        return $this->hasOne('App\model\Stories','author','id');
    }

}
