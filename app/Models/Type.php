<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $fillible = ['name'];

    public function kitchens() {
        return $this->hasMany('App\Models\Kitchen');
    }
}
