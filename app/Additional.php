<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    protected $fillable = [
        'tipe_id',
        'feature',
        'price',
        'numPackage',
        'pricePackage'
    ];

    public function tipe()
    {
        return $this->belongsTo('App\Tipe');
    }
}
