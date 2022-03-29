<?php

namespace Findsome\Client\Classes;

use Findsome\Client\Enums\RequestType;

class Request extends Client
{
    public function doGet($endpoint, $params = [])
    {
        return $this->makeRequest($endpoint, $params, RequestType::GET);
    }

    public function doPost($endpoint, $params = [])
    {
        return $this->makeRequest($endpoint, $params, RequestType::POST);
    }
}
