<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content'
    ];

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')
            ->withTimestamps();
    }

    // Mutator - Modifies the data before it goes in to database, gets called whenever 'title' attribute is sent
    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);
    }

    // Accessor - Modifies the data when it gets called form the database, gets called whenver title attribute is fetched.
    public function getTitleAttribute($value){
        return strtoupper($value);
    }
};
