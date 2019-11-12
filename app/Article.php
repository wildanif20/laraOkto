<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Exists;

class Article extends Model
{
    protected $fillable = [
        'title', 'content', 'article_image'
    ];

    public function valid()
    {
        return array(
            'content' => 'required',
        );
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'article_id');
    }

    public function img_article()
    {
        //Check file exist on folder path
        if (file_exists( public_path() . '/images/article/' . $this->article_image) && $this->article_image != null) {
            //if true show image after upload
            return '/images/article/' . $this->article_image;
        } else {
            //if false, show default image
            return url('/images/article/def-up.jpg');
        }
    }
}
