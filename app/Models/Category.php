<?php

namespace App\Models;

use App\Models\CategoryTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = ['type_id', 'slug', 'name', 'order_column'];

    public function type()
    {
        return $this->belongsTo(CategoryTypes::class, 'type_id');
    }

    public function items()
    {
        return $this->hasMany(Product::class);
    }
}
