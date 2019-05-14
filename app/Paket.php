<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int tipe_id
 * @property int kodePaket_id
 * @property string kodePaket_type
 */
class Paket extends Model
{
    public function pesanan(){
        return $this->hasMany('App/Pesanan');
    }

    public function tipe()
    {
        return $this->belongsTo('App/Tipe');
    }

    public function kodePaket()
    {
        return $this->morphTo('kodePaket', 'kodePaket_type', 'kodePaket_id');
    }
}