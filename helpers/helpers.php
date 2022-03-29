<?php

if(! function_exists('findsome_api')) {
    function findsome_api()
    {
        return new \Findsome\Client\Findsome;
    }
}

if(! function_exists('get_config')) {
    function get_config($file)
    {
        $primaryPath = __DIR__."/../../../../config/{$file}.php";
        $fallbackPath = __DIR__."/../config/{$file}.php";

        $file = file_exists($primaryPath) ? $primaryPath : $fallbackPath;
        
        if(is_file($file)) return include $file;
    }
}

if(! function_exists('make_object')) {
    function make_object($arr) {
        return json_decode(json_encode($arr));
    }
}

if(! function_exists('build_get_param')) {
    function build_get_param($params)
    {
        $str = '';
        $arrLength = count($params);
        $arrIndex = 1;
        foreach($params as $key => $value) {
            if($arrIndex == 1) $str .= '?';

            $str .= "{$key}={$value}";

            if($arrIndex != $arrLength) $str .= '&';

            $arrIndex++;
        }

        return urlencode($str);
    }
}

if(! function_exists('add_commission')) {
    function add_commission($cards)
    {
        $commission = get_config('findsome')['commission'];

        array_map(function ($card) use ($commission) {
            $price = (float) $card->price; 
            $price += $commission;
            $card->price = $price;
        }, $cards);

        return $cards;
    }
}

if(! function_exists('checking_cost')) {
    function checking_cost()
    {
        return get_config('findsome')['checking_cost'];
    }
}
