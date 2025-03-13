<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Orders;

use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubAll;
use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubCreate;

class Refunds
{
    use SubAll, SubCreate;

    protected static $extends = Orders::class;
    protected static $endpoint = 'refunds';
}
