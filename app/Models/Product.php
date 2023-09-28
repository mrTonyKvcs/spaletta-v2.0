<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    // protected $table = 'items';

    protected $fillable = [ 'category_id', 'slug', 'name', 'en_name', 'de_name', 'comment','price', 'less_price', 'wine'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        $locale = \LaravelLocalization::getCurrentLocale();

        if ($locale === 'hu') {
            return $value;
        } elseif ($locale === 'en') {
            return $this->en_name;
        } elseif ($locale === 'de') {
            return $this->de_name;
        };
    }

    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getCommentAttribute($value)
    {
        $locale = \LaravelLocalization::getCurrentLocale();

        if ($locale === 'hu') {
            return $value;
        } elseif ($locale === 'en') {
            return $this->en_comment;
        } elseif ($locale === 'de') {
            return $this->de_comment;
        };
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
