<?php

return [

    'client_id' => env('PAYPAL_CLIENT_ID','AdMmckPDdSt7dQFmY2BkvK1wnWKhsaA2QX82tWb7bnFDTT_q0VfZ0R6wTKP32GXfVTnTWvUVREyaJqul'),

    'secret' => env('PAYPAL_SECRET','EDlD_j4hNHjruWAa_yTocAoZkRaXw95OYtEBCgteuX5O2Tlk7YGH1Hu5f8THzIGBN4f-TMBd4MHci6lj'),

    'settings' => array(

        'mode' => env('PAYPAL_MODE','sandbox'),

        'http.ConnectionTimeOut' => 30,

        'log.LogEnabled' => true,

        'log.FileName' => storage_path() . '/logs/paypal.log',

        'log.LogLevel' => 'ERROR'

    ),

];
