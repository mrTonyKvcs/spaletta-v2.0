<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [ 'slug', 'title', 'image_path'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['started_at', 'finished_at', 'deleted_at'];

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}

    public function scopeActive($query)
    {
        return $query
            ->orWhere('finished_at', '>=', now());
            // ->where('started_at', '>=', now())
            // ->where('finished_at', '<=', now());
    }
}
