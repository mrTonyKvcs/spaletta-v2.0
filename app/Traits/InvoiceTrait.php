<?php

namespace App\Traits;

use SzamlaAgent\SzamlaAgentAPI;
use SzamlaAgent\Buyer;
use SzamlaAgent\Document\Invoice\Invoice;
use SzamlaAgent\Item\InvoiceItem;

trait InvoiceTrait
{
    public function createInvoice($data)
    {
        $priceWithoutTax = $data['price'] * 0.75;

        $agent = SzamlaAgentAPI::create('jhghwq8mypzhzjjefqcfwwmhqv4sfbyazafyexbpad');
        /**
         * Új papír alapú számla létrehozása
         *
         * Átutalással fizetendő magyar nyelvű (Ft) számla kiállítása mai keltezési és
         * teljesítési dátummal, +8 nap fizetési határidővel.
         */
        $invoice = new Invoice(Invoice::INVOICE_TYPE_E_INVOICE);
        // Vevő adatainak hozzáadása (kötelezően kitöltendő adatokkal)
        $invoice->setBuyer(new Buyer($data['name'], $data['zip'], $data['city'], $data['street'] . ' ' . $data['house_number']));
        // Számla tétel összeállítása alapértelmezett adatokkal (1 db tétel 27%-os ÁFA tartalommal)
        $item = new InvoiceItem($data['event_name'], 10000.00);
        // Tétel nettó értéke
        $item->setNetPrice(10000.00);
        // Tétel ÁFA értéke
        $item->setVatAmount(2700.00);
        // Tétel bruttó értéke
        $item->setGrossAmount(12700.00);
        // Tétel hozzáadása a számlához
        $invoice->addItem($item);

        // Számla elkészítése
        $result = $agent->generateInvoice($invoice);
        // Agent válasz sikerességének ellenőrzése
        if ($result->isSuccess()) {
            // echo 'A számla sikeresen elkészült. Számlaszám: ' . $result->getDocumentNumber();
            // Válasz adatai a további feldolgozáshoz
            // var_dump($result->getDataObj());
            return $result->getDocumentNumber();
        }
    }
}
