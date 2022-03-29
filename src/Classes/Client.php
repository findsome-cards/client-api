<?php

namespace Findsome\Client\Classes;

use Findsome\Client\Enums\RequestType;

class Client extends Builder
{
    protected function makeRequest(string $endpoint, array $params = [], string $method = RequestType::GET)
    {
        $context = stream_context_create($this->buildGetHeaders());
        $url = $this->buildUrl($endpoint, $params);

        if( !strcmp($method, RequestType::GET) && !empty($params)) {
            $url = $this->buildUrlWithParams($url, $params);
        }
        else if($method == RequestType::POST) {
            $context = stream_context_create($this->buildPostHeaders($params));
        }

        $response = file_get_contents($url, false, $context);

        return json_decode($response);
    }

}
