<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationSuggestion extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

public function location()
{
    return $this->belongsTo(Location::class);
}
}
