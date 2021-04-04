<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = config('order.payments');
        
        foreach($payments as $payment) {
            $payment['slug'] = \Str::slug($payment['name']);
            
            Payment::updateOrCreate($payment);
        }
    }
}
