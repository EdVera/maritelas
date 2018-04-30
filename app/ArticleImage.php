<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    protected $table = "article_images";

    protected $fillable = [
      'name',
      'article_id'
    ];

    public function articles(){
      return $this->belongsTo('App\Article','article_id');
    }
}
