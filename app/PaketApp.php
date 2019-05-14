<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string nama
 * @property int harga
 * @property int pages
 * @property int duration
 * @property int publish
 * @property int play_id
 * @property int connectivity
 * @property int freeEditPage
 * @property int troubleshooting
 * @property int storage
 * @property int offline
 * @property int online
 * @property int admin
 * @property int language
 */
class PaketApp extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'pages',
        'duration',
        'publish',
        'play_id',
        'connectivity',
        'freeEditPage',
        'troubleshooting',
        'storage',
        'offline',
        'online',
        'admin',
        'language'
    ];

    public function play()
    {
        return $this->belongsTo('App\Play');
    }

    public function paket()
    {
        return $this->morphMany('App\Paket', 'kodePaket', 'kodePaket_type', 'kodePaket_id', 'id');
    }
}
