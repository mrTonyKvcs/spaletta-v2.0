<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'menu_id', 'category_id', 'slug', 'name'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function scopeSoup($query)
    {
        return $query->where('category_id', 3);
    }

    public function scopeMainCourse($query)
    {
        return $query->where('category_id', 6);
    }
}
