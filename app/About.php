<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'body',
        'photo_id'
    ];

    public function photo()
    {
        return $this->morphMany('App\Photo', 'photoable');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }
}
