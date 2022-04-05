<?php

use Findsome\Client\Findsome;

require_once('vendor/autoload.php');

$find = new Findsome;

//support for api direct_call
// var_dump(findsome_api()->user());
// var_dump($find->user());
// var_dump($find->baseNames());
//var_dump($find->search_terms());
//var_dump(get_config('findsome'));
//available params for cards
//      'bin'
//      'exp'
//      'type'
//      'level'
//      'brand'
//      'bank'
//      'zip'
//      'state'
//      'country'
//      'busy'
//      'page'


// $params = [
//     'bin' => '601100',
//     'page' => '1'
// ];

// $cards = $find->cards($params);
// $commissioned = $find->commissionedCards($params);
// var_dump($cards->data[0]);
// var_dump($commissioned->data[0]);

/** 
var_dump($find->cards($params));

var_dump($find->commissionedCards($params));

var_dump(checking_cost());

//passing invoice id
var_dump($find->invoice(1234));

//passing carted id
var_dump($find->purchase([303883, 303884]));
*/

// var_dump($find->priceCheck([4959477505, 4959498753]));
