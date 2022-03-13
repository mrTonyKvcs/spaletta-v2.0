<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory; use SoftDeletes;

    protected $fillable = [
        'order_number', 'event_id', 'name', 'email', 'phone_number', 'zip', 'city', 'street', 'house_number', 'quantity', 'total', 'payment_id', "is_paid", 'check_in', 'invoice_id', 'order_ref', 'transaction_id'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function getAddressAttribute()
    {
        return "{$this->zip_code} {$this->city} {$this->street} {$this->house_number}";
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getPaymentExpiredAttribute()
    {
        return Carbon::parse($this->created_at)->addDays(8);
    }
}
