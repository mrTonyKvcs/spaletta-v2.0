<?php

namespace App\Traits;

use App\Models\Ticket;

trait TicketTrait
{
    public function getTicketData($data)
    {
        $houseNumber = $data['invoiceData']['houseNumber'];
        unset($data['invoiceData']['houseNumber']);

        $data['invoiceData']['quantity'] = $this->quantity;
        $data['invoiceData']['total'] = $this->getTotal();
        $data['invoiceData']['order_number'] = $this->generateOrderNumber();
        $data['invoiceData']['event_id'] = $this->event->id;
        $data['invoiceData']['house_number'] = $houseNumber;
        $data['invoiceData']['payment_id'] = 3;

        return $data['invoiceData'];
    }

    public function generateOrderNumber()
    {
        $newOrderNumber = substr(Ticket::select('order_number')->get()->last()->order_number, 11) + 1;

        return 'SPALETTA-T-' . $newOrderNumber;
    }
}
