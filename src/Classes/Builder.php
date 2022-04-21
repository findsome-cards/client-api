<?php

namespace Findsome\Client\Classes;

use Findsome\Client\Enums\RequestType;

class Builder
{
    protected $config;

    public function __construct()
    {
        $this->config = make_object(get_config('findsome'));
    }

    public function buildUrl($endpoint)
    {
        return "{$this->config->base_uri}/{$endpoint}";
    }

    public function buildUrlWithParams($url, $params)
    {
        $params = build_get_param($params);

        return $url.$params;
    }

    public function buildGetHeaders()
    {
        $headers = $this->commonHeaders();
        $headers['http']['method'] = RequestType::GET;
        
        return $headers;
    }

     public function buildPostHeaders($params)
    {
        $params = json_encode($params);
        $length = strlen($params);

        $headers = $this->commonHeaders();
        $headers['http']['method'] = RequestType::POST;
        $headers['http']['header'][] =  ["Content-Length: {$length}\r\n"];
        $headers['http']['content'] = $params;
        
        return $headers;
    }

    public function commonHeaders()
    {
        return [
            'http' => [
                'header' => [
                    "Content-Type: application/json\r\n".
                    "Accept: application/json\r\n".
                    "Authorization: Bearer {$this->config->api_token}\r\n"
                ]
            ],
            'ssl' => [
                'allow_self_signed' => true,
                'verify_peer'       => false,
                'verify_peer_name'  => false,
            ],
        ];
    }
}
