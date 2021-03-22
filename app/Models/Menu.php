<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'category_type_id', 'price', 'started_at', 'expired_at', 'sold_out', 'last_order_of_the_day'
    ];

    public function type()
    {
        return $this->belongsTo(CategoryTypes::class, 'category_type_id');
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }

    public function scopeIsActive($query)
    {
        return $query->where('started_at', '<=', now())
            ->where('expired_at', '>=', now())
            ->where('sold_out', false)
            ->where('last_order_of_the_day', '>=', now()->toTimeString());
    }
}
