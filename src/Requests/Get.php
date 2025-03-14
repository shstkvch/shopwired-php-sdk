<?php

namespace Shstkvch\ShopWiredPHPSDK\Requests;

use Shstkvch\ShopWiredPHPSDK\ShopWiredClient;
use Shstkvch\ShopWiredPHPSDK\ShopWiredThrottle;

trait Get
{
    /**
     * Return an object by ID.
     *
     * @param int $id - Object ID
     * @param array $options - Options
     * @return array
     */
    public static function get($id, $options = [])
    {
        ShopWiredThrottle::throttle();

        $shopwired_client = ShopWiredClient::get();

        $endpoint = static::$endpoint;
        if ($id) {
            $endpoint = $endpoint.'/'.$id;
        }

        $response = $shopwired_client->get($endpoint, [
            'query' => $options,
        ]);

        $response_body = $response->getBody()->getContents();

        return json_decode($response_body, true);
    }
}
