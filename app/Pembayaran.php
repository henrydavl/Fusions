<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'user_id',
        'namaBank',
        'nomorRekening',
        'atasNama'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
