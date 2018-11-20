<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\Administrator;
use App\model\User;
use App\model\Post;
use App\model\Categories;
use App\model\Comments_stories;
use App\model\Vlog;

class Comments_stories extends Model
{
  protected $post_list = 'comments_stories';
  protected $fillable = array('post_id', 'user_id', 'message');

  public function post(){
      return $this->belongsTo(Post::class);
  }

  public function vlog(){
      return $this->belongsTo(Vlog::class);
  }

  public function user(){
      return $this->belongsTo(User::class);
  }
}
