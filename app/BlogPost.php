<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $table = 'blog_posts';

    public $timestamps = true;


    public function tag(){
        return $this->hasMany('App\Tag');
    }



}
