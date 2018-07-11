<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\User\post', 'category_posts')->paginate(2);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
