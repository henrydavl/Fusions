<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProyekWeb extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'pesanan_id',
        'themeRef',
        'color_id',
        'penjelasan',
        'status',
        'deadline',
        'admin_id',
        'zipData',
        'domain_id',
        'hosting_id'
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

    public function domain()
    {
        return $this->belongsTo('App\Domain');
    }

    public function hosting()
    {
        return $this->belongsTo('App\Hosting');
    }

    public function ftp()
    {
        return $this->hasMany('App\Ftp');
    }

    public function database()
    {
        return $this->hasMany('App\Databas');
    }
}
