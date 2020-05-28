<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');                                    //relazione molti a uno
    }
    public function pages()
    {
        return $this->hasMany('App\Page');
    }
}
