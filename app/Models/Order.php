<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'user_id', 'type_id', 'delivery_address_id', 'comment'
    ];
}
