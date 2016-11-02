<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    protected $table = 'laboratory';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];
    
    public function categories()
    {
        return $this->hasMany('App\Category', 'category_id', 'id');
    }
    
    public function events()
    {
        return $this->hasMany('App\Event', 'event_id', 'id');
    }
}
