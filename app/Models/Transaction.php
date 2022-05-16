<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = ['model', 'status', 'transaction_id', 'order_ref'];

    public function model()
    {
        return $this->morphTo();
    }
}
