<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'slug', 'name'
    ];

    public function getNameAttribute($value)
    {
        return trans($value);
    }
}
