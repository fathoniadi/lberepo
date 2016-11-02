<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $dates = ['deleted_at'];
    protected $fillable = ['name'];

    public function laboratory()
    {
        return $this->belongsTo('App\Laboratory', 'laboratory_id', 'id');
    }
}
