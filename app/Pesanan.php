<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesanan extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'paket_id',
        'user_id',
        'buktiTransfer',
        'statusBayar',
        'statusTerima',
        'waktuTerima',
        'admin_id'
    ];

    public function proyekWeb(){
        return $this->hasOne('App\ProyekWeb');
    }

    public function proyekApp(){
        return $this->hasOne('App\ProyekApp');
    }

    public function proyekDes(){
        return $this->hasOne('App\ProyekDesain');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function paket()
    {
        return $this->belongsTo('App\Paket');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }
}
