<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Orders;

use Shstkvch\ShopWiredPHPSDK\Requests\All;
use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubAll;
use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubCreate;

class OrderStatus
{
    use SubCreate {
        create as update;
    }

    protected static $extends = Orders::class;
    protected static $endpoint = 'status';
}
