<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'user_id',
        'categories_id',
        'title',
        'summary',
        'body',
        'slug'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }
    public function tags()
   {
       return $this->belongsToMany('App\Tag');
   }
    public function photos()
   {
       return $this->belongsToMany('App\Photo');
   }
}
