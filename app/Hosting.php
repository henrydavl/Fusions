<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
    protected $fillable = [
        'code',
        'tempo'
    ];

    public function proyekWeb()
    {
        return $this->hasMany('App\ProyekWeb');
    }
}
