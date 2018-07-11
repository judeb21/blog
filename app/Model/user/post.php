<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Model\User\category', 'category_posts')->withTimeStamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
