<?php

namespace Shstkvch\ShopWiredPHPSDK\Requests;

use Shstkvch\ShopWiredPHPSDK\ShopWiredClient;
use Shstkvch\ShopWiredPHPSDK\ShopWiredThrottle;

trait Count
{
    /**
     * Return a count of all objects.
     *
     * @param array $options - Options
     * @return array
     */
    public static function count($options = [])
    {
        ShopWiredThrottle::throttle();

        $shopwired_client = ShopWiredClient::get();

        $response = $shopwired_client->get(static::$endpoint.'/count', [
            'query' => $options,
        ]);

        $response_body = $response->getBody()->getContents();

        return json_decode($response_body, true);
    }
}
