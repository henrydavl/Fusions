<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ftp extends Model
{
    protected $fillable = [
        'proyekWeb_id',
        'host',
        'username',
        'password'
    ];

    public function proyekWeb()
    {
        return $this->belongsTo('App\ProyekWeb');
    }
}
