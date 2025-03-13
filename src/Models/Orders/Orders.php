<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Orders;

use Shstkvch\ShopWiredPHPSDK\Requests\All;
use Shstkvch\ShopWiredPHPSDK\Requests\Count;
use Shstkvch\ShopWiredPHPSDK\Requests\Create;
use Shstkvch\ShopWiredPHPSDK\Requests\Delete;
use Shstkvch\ShopWiredPHPSDK\Requests\Get;
use Shstkvch\ShopWiredPHPSDK\Requests\Update;

class Orders
{
    use All, Count, Get, Create, Delete;

    public static $endpoint = '/v1/orders';
}
