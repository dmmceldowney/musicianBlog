<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogPost extends Model
{
    use SoftDeletes;
    //
    protected $table = 'blog_posts';

    public $timestamps = true;

    public function tag(){
        return $this->hasMany('App\Tag');
    }

    public function getBeginningAttribute(){
        return explode('<br>', $this->body)[0];
    }
}
