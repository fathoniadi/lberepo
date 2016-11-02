<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedbacks';
    protected $dates = ['deleted_at'];
    protected $fillable = ['text'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }
}
