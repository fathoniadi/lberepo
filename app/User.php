<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    protected $table = 'users';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'NRP', 'phone', 'lineID'];
    protected $hidden = ['password', 'remember_token'];

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function laboratory(){
        return $this->belongsTo('App\Laboratory', 'laboratory_id', 'id');
    }

    public function feedbacks()
    {
        return $this->hasMany('App\Feedback', 'feedback_id', 'id');
    }
}
