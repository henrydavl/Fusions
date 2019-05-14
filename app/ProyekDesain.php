<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProyekDesain extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'penjelasan',
        'color_id',
        'link',
        'deadline',
        'admin_id',
        'zipData'
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
}
