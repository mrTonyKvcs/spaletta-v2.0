<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'slug', 'name'
    ];

    public function getTextAttribute($value)
    {
        return $value == 'kiszallitas' ? 'A rendelés úton van.' : 'Elkészült a rendelés.';
    }
}
