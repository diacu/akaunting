<?php

return [

    'invoice_number'        => 'Numărul facturii',
    'invoice_date'          => 'Data facturii',
    'total_price'           => 'Preț total',
    'due_date'              => 'Scadentă',
    'order_number'          => 'Număr de comandă',
    'bill_to'               => 'Facturaţi către',

    'quantity'              => 'Cantitate',
    'price'                 => 'Preț',
    'sub_total'             => 'Subtotal',
    'discount'              => 'Reducere',
    'tax_total'             => 'Total taxe',
    'total'                 => 'Total',

    'item_name'             => 'Articol|Articole
Nume articol|Nume articole',

    'show_discount'         => ':discount% reducere',
    'add_discount'          => 'Adaugă reducere',
    'discount_desc'         => 'din subtotal',

    'payment_due'           => 'Data scadentă',
    'paid'                  => 'Plătit',
    'histories'             => 'Istoric',
    'payments'              => 'Plăți',
    'add_payment'           => 'Adaugă plată',
    'mark_paid'             => 'Marchează ca și plătit',
    'mark_sent'             => 'Marchează ca și trimis',
    'download_pdf'          => 'Descarcă PDF',
    'send_mail'             => 'Trimite email',
    'all_invoices'          => 'Login to view all invoices',
    'create_invoice'        => 'Crează factură',
    'send_invoice'          => 'Trimite factură',
    'get_paid'              => 'Primește plată',
    'accept_payments'       => 'Acceptă plată online',

    'status' => [
        'draft'             => 'Ciornă',
        'sent'              => 'Trimis',
        'viewed'            => 'Vizualizat',
        'approved'          => 'Aprobat',
        'partial'           => 'Parţial
Parţială',
        'paid'              => 'Plătit',
    ],

    'messages' => [
        'email_sent'        => 'Emailul cu factura a fost trimis cu succes!',
        'marked_sent'       => 'Factura a fost marcata ca si trimisa cu succes!',
        'email_required'    => 'Nu exista adresa de email pentru acest client!',
        'draft'             => 'This is a <b>DRAFT</b> invoice and will be reflected to charts after it gets sent.',

        'status' => [
            'created'       => 'Creat în :date',
            'send' => [
                'draft'     => 'Netrimis',
                'sent'      => 'Trimis în :date',
            ],
            'paid' => [
                'await'     => 'Plată în așteptare',
            ],
        ],
    ],

    'notification' => [
        'message'           => 'A fost emisă o nouă factură către :customer, în suma de :amount.',
        'button'            => 'Plătește acum',
    ],

];
