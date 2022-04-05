<?php

return [
    //replace this base uri with production uri
    'base_uri' => 'https://findsome-backend.test/api/seller', // no trailing slash
    'api_token' => '',
    'commission_type' => 'flat', // flat | percent
    'flat' => 1.0, // add the commission amount you want in dollars (float)
    'percent' => 10, // int
    'checking_cost' => 0.40, //float
];
