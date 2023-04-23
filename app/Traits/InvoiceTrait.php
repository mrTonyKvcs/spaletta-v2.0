<?php

namespace App\Traits;

use App\Models\Invoice as InvoiceModel;
use SzamlaAgent\SzamlaAgentAPI;
use SzamlaAgent\Buyer;
use SzamlaAgent\Document\Invoice\Invoice;
use SzamlaAgent\Item\InvoiceItem;
use Illuminate\Support\Str;

trait InvoiceTrait
{
    public function createInvoiceModel($invoiceNumber)
    {
        return InvoiceModel::create([
            'slug' => Str::slug($invoiceNumber),
            'invoice_number' => $invoiceNumber
        ]);
    }

    public function createInvoice($data)
    {

        $agent = SzamlaAgentAPI::create('unjd4fpyfnz3unjd4fntm4wvunjd4frtmp2eunjd4f');
        // tony's api key
        // $agent = SzamlaAgentAPI::create('jhghwq8mypzhzjjefqcfwwmhqv4sfbyazafyexbpad');
        /**
         * Új papír alapú számla létrehozása
         *
         * Átutalással fizetendő magyar nyelvű (Ft) számla kiállítása mai keltezési és
         * teljesítési dátummal, +8 nap fizetési határidővel.
         */
        $invoice = new Invoice(Invoice::INVOICE_TYPE_E_INVOICE);
        // Vevő adatainak hozzáadása (kötelezően kitöltendő adatokkal)
        $invoice->setBuyer(new Buyer($data['name'], strval($data['zip']), $data['city'], $data['street'] . ' ' . $data['house_number']));

        foreach($data['prices'] as $ticketPrice) {
            $priceWithoutTax = $ticketPrice['price'] / 1.27;
            $tax = $ticketPrice['price'] - $priceWithoutTax;
            // Számla tétel összeállítása alapértelmezett adatokkal (1 db tétel 27%-os ÁFA tartalommal)
            $item = new InvoiceItem($data['event_name'] . ' | ' . $ticketPrice['category']['name'], $priceWithoutTax * $ticketPrice['quantity']);
            // Tétel nettó értéke
            $item->setNetPrice($priceWithoutTax * $ticketPrice['quantity']);
            // Tétel ÁFA értéke
            $item->setVatAmount($tax * $ticketPrice['quantity']);
            // Tétel bruttó értéke
            $item->setGrossAmount($ticketPrice['price'] * $ticketPrice['quantity']);
            // Tétel hozzáadása a számlához
            $invoice->addItem($item);
        }

        // Számla elkészítése
        $result = $agent->generateInvoice($invoice);
        // Agent válasz sikerességének ellenőrzése
        if ($result->isSuccess()) {
            $this->createInvoiceModel($result->getDocumentNumber());
            // echo 'A számla sikeresen elkészült. Számlaszám: ' . $result->getDocumentNumber();
            // Válasz adatai a további feldolgozáshoz
            // var_dump($result->getDataObj());
            return $result->getDocumentNumber();
        }
    }
}
