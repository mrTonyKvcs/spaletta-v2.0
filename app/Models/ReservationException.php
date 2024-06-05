<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReservationException extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['day_from', 'day_to', 'time_from', 'time_to'];
}
