<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'time', 'name', 'phone', 'email', 'location_id', 'reservation_for_tv', 'number_of_persons', 'comment'];

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
