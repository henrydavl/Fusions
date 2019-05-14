<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'telepon', 'alamat', 'gender', 'role_id', 'email', 'password','active','activation_token','photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pembayaran()
    {
        return $this->hasMany('App\Pembayaran');
    }

    public function pesanan(){
        return $this->hasMany('App\Pesanan');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

//    admin
    public function proyekWeb()
    {
        return $this->hasMany('App\ProyekWeb');
    }

    public function proyekApp()
    {
        return $this->hasMany('App\ProyekApp');
    }

    public function proyekDesain()
    {
        return $this->hasMany('App\ProyekDesain');
    }

    public function meeting()
    {
        return $this->hasMany('App\MeetUs');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function review(){
        return $this->hasOne('App\Review');
    }

//    cek role
    public function isAdmin(){
        if ($this->role->nama == 'Administrator' && $this->active == 1 && $this->activation_token == null){
            return true;
        }
        return false;
    }

    public function isUser(){
        if ($this->role->nama == 'User' && $this->active == 1 && $this->activation_token == null){
            return true;
        }
        return false;
    }
}
