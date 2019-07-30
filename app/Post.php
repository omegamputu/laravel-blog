<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'slug', 'body', 'category_id', 'image', 'online'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function scopePublished($query)
    {
        return $query->where('online', true);
    }

    public function scopeSearchByTitle($query, $q)
    {
        return $query->where('title', 'LIKE', '%' . $q . '%');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
