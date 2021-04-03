<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    use HasFactory; use SoftDeletes;

    protected $table = 'delivery_addresses';

    protected $fillable = [
        'user_id', 'default','zip_code', 'city', 'street', 'house_number', 'floor', 'door', 'ring', 'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getNameAttribute()
    {
        return "{$this->zip_code} {$this->city} {$this->street} {$this->house_number}. {$this->floor}/{$this->door} Csengő: {$this->ring}";
    }
}
