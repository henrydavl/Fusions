<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Databas extends Model
{
    protected $fillable = [
        'proyekWeb_id',
        'nama',
        'username',
        'password'
    ];

    public function proyekWeb()
    {
        return $this->belongsTo('App\ProyekWeb');
    }
}
