<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment'];

    protected $with = ['children'];
    //
    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function children()
    {
        return $this->hasMany('App\Comment', 'parent_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
