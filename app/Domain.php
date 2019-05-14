<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
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
