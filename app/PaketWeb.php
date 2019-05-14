<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string nama
 * @property int harga
 * @property int freeDomain
 * @property int freeSubdomain;
 * @property int pages
 * @property int seo
 * @property int duration
 * @property int freeEditPage
 * @property int troubleshooting
 * @property int responsive
 * @property int ftp
 * @property int slideshow
 * @property int cms
 * @property int ssl
 * @property int login
 * @property int siteSearch
 * @property int freeHosting
 */
class PaketWeb extends Model
{
    protected $fillable = [
        'nama',
        'harga',
        'freeHosting',
        'freeDomain',
        'freeSubdomain',
        'pages',
        'seo',
        'duration',
        'freeEditPage',
        'troubleshooting',
        'responsive',
        'ftp',
        'slideshow',
        'cms',
        'ssl',
        'login',
        'siteSearch'
    ];

    public function paket()
    {
        return $this->morphMany('App\Paket', 'kodePaket', 'kodePaket_type', 'kodePaket_id', 'id');
    }
}
