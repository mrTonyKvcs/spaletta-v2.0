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

    /**
     * undocumented function
     *
     * @return void
     */
    public function staff()
    {
        return $this->belongsToMany(User::class, 'staff_id');
    }

    public function statuses()
    {
        return $this->belongsToMany(Status::class, 'order_status_staff')
            ->withTimestamps();
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
