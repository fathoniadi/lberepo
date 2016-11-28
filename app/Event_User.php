<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event_User extends Model
{
    protected $table = 'event_user';
    protected $dates = ['deleted_at'];
    protected $fillable = ['text'];

    public function events()
    {
        return $this->belongsToMany('App\Event', 'event_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id', 'id');
    }
}
