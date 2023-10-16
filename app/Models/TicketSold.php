<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketSold extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'category_id', 'price', 'tax','quantity'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
