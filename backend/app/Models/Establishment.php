<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
public function location()
{
    return $this->belongsTo(Location::class);
}
}
