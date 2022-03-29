<?php

namespace Findsome\Client;

use Findsome\Client\Classes\Request;
use Findsome\Client\Enums\CheckerType;

class Findsome extends Request
{
    public function user()
    {
        return $this->doGet('users');
    }

    public function addresses()
    {
        return $this->doGet('addresses');
    }

    public function statistics()
    {
        return $this->doGet('statistics/countries-list');
    }

    public function baseNames()
    {
        return $this->doGet('search/cards');
    }

    public function searchStates($country = '')
    {
        return $this->doGet('search/states', ['country' => $country]);
    }

    public function searchCities($state='')
    {
        return $this->doGet('search/cities', [ 'state' => $state]);
    }

    public function cards($params = [])
    {
        return $this->doGet('cards', $params);
    }

    public function commissionedCards($params = [])
    {
        $response = $this->cards($params);
         if(isset($response->data)) {
            $response->data = add_commission($response->data);
        }
        return $response;
    }

    // [1234, 5678]
    public function priceCheck($cardIDs)
    {
         $params = [
            "id" => $cardIDs
        ];
        return $this->doPost("cards-price", $params);
    }

    public function check($cardID, $checker = CheckerType::TRY2)
    {
        return $this->doGet("check/{$cardID}?checker={$checker}");
    }

    public function invoices()
    {
        return $this->doGet("invoices");
    }

    public function invoice($invoiceID)
    {
        return $this->doGet("invoices/{$invoiceID}");
    }

    // [1234, 5678]
    public function purchase($cardIDs)
    {
        $params = [
            "id" => $cardIDs
        ];

        return $this->doPost('checkout', $params);
    }
}
