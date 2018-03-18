<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    protected $fillable = ['img', 'type_id', 'name', 'text', 'clicks', 'provider_id'];
    protected $table = 'kitchens';

    public function type() {
        return $this->belongsTo('App\Models\Type');
    }
    public function provider() {
        return $this->belongsTo('App\Models\Provider');
    }
}
