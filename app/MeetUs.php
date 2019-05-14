<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeetUs extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        //'user_id',
        'dateMeet',
        'timeMeet',
        'name',
        'email',
        'methodmeet',
        'phoneOrSkype',
        'placeMeet',
        'topic_design',
        'topic_web',
        'topic_app',
        'notes',
        'admin_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function admin()
    {
        return $this->belongsTo('App\User', 'admin_id', 'id');
    }
}
