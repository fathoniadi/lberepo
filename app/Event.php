<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'mentor', 'date'];

    public function laboratory()
    {
        return $this->belongsTo('App\Laboratory', 'laboratory_id', 'id');
    }
    
    public function feedbacks()
    {
        return $this->hasMany('App\Feedback', 'feedback_id', 'id');
    }
}
