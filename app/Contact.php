<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Contact extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'phone'];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'firstname'
            ]
        ];
    }

    public function emails()
    {
        return $this->hasMany(Email::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
