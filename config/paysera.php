<?php
return [
    'projectid'     => '149767',
    'sign_password' => '3b5baa4288a1ba4f0ce32ab6f6350603',
    'currency'      => 'EUR',
    'country'       => 'LT',

    // Test mode (sand box) 0 - off or 1 - on
    'test'          => 1,

    /*
     * Order model namespace
     * Package can automatically set order model status
     * If null, nothing gone happen
     */
    'order_model_namespace' => \App\Order::class,

    /*
     * URI where Paysera will send callback
     */
    'callback_uri' => 'payment.callback',

    /*
     * Accept and cancel routes names
     * PayseraMiddleWare will take care parsing data and etc.
     */
    'routes_names' => [
        'accept' => 'payment.status',
        'cancel' => 'payment.cancel'
    ],

    /*
     * Used for get available payment methods
     * Here you can set what payment methods groupds should be return by default
     */
    'payment_groups' => ['e-banking', 'e-money', 'other'],


];