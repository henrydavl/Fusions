<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string tipe
 */
class Tipe extends Model
{
    protected $fillable = [
        'tipe'
    ];

    public function paket()
    {
        return $this->hasMany('App\Paket');
    }

    public function additional()
    {
        return $this->hasMany('App\Additional');
    }
}
