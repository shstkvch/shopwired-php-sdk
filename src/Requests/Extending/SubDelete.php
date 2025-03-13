<?php

namespace Shstkvch\ShopWiredPHPSDK\Requests\Extending;

use Shstkvch\ShopWiredPHPSDK\Requests\Delete;

trait SubDelete
{
    use Delete {
        delete as protected _delete;
    }

    public static function delete($parent_id, $id)
    {
        $parent = new self::$extends;

        $endpoint = self::$endpoint;
        self::$endpoint = $parent::$endpoint."/$parent_id/".self::$endpoint;
        self::_delete($id);
        self::$endpoint = $endpoint;
    }
}
