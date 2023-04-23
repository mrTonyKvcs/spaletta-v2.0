<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'priceable_type',
        'priceable_id',
        'price',
        'maxQuantity',
        'comment'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the owning priceable model.
     */
    public function priceable()
    {
        return $this->morphTo();
    }
}
