<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublishPlay extends Model
{
    protected $fillable = [
        'featureGraphics',
        'shortDesc',
        'description',
        'icon',
        'ss1',
        'ss2',
        'ss3',
        'ss4',
        'ss5',
        'ss6',
        'ss7',
        'ss8',
        'country'
    ];

    public function proyekApp()
    {
        return $this->belongsTo('App\ProyekApp');
    }
}
