<?php

namespace Shstkvch\ShopWiredPHPSDK\Requests\Extending;

use Shstkvch\ShopWiredPHPSDK\Requests\Update;

trait SubUpdate
{
    use Update {
        update as protected _update;
    }

    public static function update($parent_id, $id, $data)
    {
        $parent = new self::$extends;

        $endpoint = self::$endpoint;
        self::$endpoint = $parent::$endpoint."/$parent_id/".self::$endpoint;
        $response = self::_update($id, $data);
        self::$endpoint = $endpoint;

        return $response;
    }
}
