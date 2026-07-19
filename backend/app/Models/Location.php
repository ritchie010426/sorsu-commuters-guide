<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
public function municipality()
{
    return $this->belongsTo(Municipality::class);
}

public function establishments()
{
    return $this->hasMany(Establishment::class);
}

public function faresFrom()
{
    return $this->hasMany(Fare::class, 'from_location_id');
}

public function faresTo()
{
    return $this->hasMany(Fare::class, 'to_location_id');
}
}
