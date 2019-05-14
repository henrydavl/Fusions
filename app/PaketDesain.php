<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int catdesain_id
 * @property int tipedesain_id
 * @property int harga
 * @property int tambahanHarga
 * @property int durationFrom
 * @property int durationTo
 * @property int revisi
 */
class PaketDesain extends Model
{
    protected $fillable = [
        'category',
        'tipe',
        'harga',
        'tambahanHarga',
        'durationFrom',
        'durationTo',
        'revisi'
    ];

    public function paket()
    {
        return $this->morphMany('App\Paket', 'kodePaket', 'kodePaket_type', 'kodePaket_id', 'id');
    }

    public function tipedesain()
    {
        return $this->belongsTo('App\TipeDesain');
    }

    public function catdesain()
    {
        return $this->belongsTo('App\CatDesain');
    }
}
