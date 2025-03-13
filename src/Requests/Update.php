<?php

namespace Shstkvch\ShopWiredPHPSDK\Requests;

use Shstkvch\ShopWiredPHPSDK\ShopWiredClient;
use Shstkvch\ShopWiredPHPSDK\ShopWiredThrottle;

trait Update
{
    /**
     * Updates an object.
     *
     * @param int $id - ID for the object
     * @param array $data - Fields for the object
     * @return array
     */
    public static function update($id, $data)
    {
        ShopWiredThrottle::throttle();

        $shopwired_client = ShopWiredClient::get();

        $endpoint = static::$endpoint;
        if ($id) {
            $endpoint = $endpoint.'/'.$id;
        }

        $response = $shopwired_client->put($endpoint, [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'json'    => $data,
        ]);
        $response_body = $response->getBody()->getContents();

        return json_decode($response_body, true);
    }
}
