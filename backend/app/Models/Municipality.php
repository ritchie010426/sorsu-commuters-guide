<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}