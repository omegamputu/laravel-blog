<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name', 'slug'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function scopeSearchByName($query, $q)
    {
        return $query->where('name', 'LIKE', '%' . $q . '%');
    }

}
