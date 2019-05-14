<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProyekApp extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'pesanan_id',
        'themeRef',
        'color_id',
        'penjelasan',
        'status',
        'deadline',
        'admin_id',
        'zipData',
        'namaApp',
        'proyekWeb_id'
    ];

    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan');
    }

    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }

    public function proyekWeb()
    {
        return $this->belongsTo('App\ProyekWeb', 'proyekWeb_id');
    }

    public function publishPlay()
    {
        return $this->hasOne('App\PublishPlay');
    }
}
