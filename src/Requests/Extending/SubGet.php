<?php

namespace Shstkvch\ShopWiredPHPSDK\Requests\Extending;

use Shstkvch\ShopWiredPHPSDK\Requests\Get;

trait SubGet
{
    use Get {
        get as protected _get;
    }

    public static function get($parent_id, $id)
    {
        $parent = new self::$extends;

        $endpoint = self::$endpoint;
        self::$endpoint = $parent::$endpoint."/$parent_id/".self::$endpoint;
        $response = self::_get($id);
        self::$endpoint = $endpoint;

        return $response;
    }
}
