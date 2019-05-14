<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portofolio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'nama',
        'photo_id',
        'status',
        'tipe',
        'admin_id',
        'description'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }
}
