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
        $lastTicket = Ticket::select('order_number')->get()->last();

        if (empty($lastTicket)) {
            $newOrderNumber = 1010;
        } else {
            $newOrderNumber = substr($lastTicket->order_number, 11) + 10000878;
        }

        return 'SPALETTA-T-' . $newOrderNumber;
    }

    public function getTicket($orderNumber)
    {
        return Ticket::query()
            ->where('order_number', $orderNumber)
            ->with('invoice')
            ->first();
    }
}
