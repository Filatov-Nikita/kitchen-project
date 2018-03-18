<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name', 'brand', 'name', 'text', 'clicks'];
    protected $table = 'providers';

    public function kitchens() {
        return $this->hasMany('App\Models\Kitchen');
    }
}
