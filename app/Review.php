<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['user_id', 'activity', 'website', 'comments', 'price' , 'support', 'fitur'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
