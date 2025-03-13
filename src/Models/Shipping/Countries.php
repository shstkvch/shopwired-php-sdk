<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Shipping;

use Shstkvch\ShopWiredPHPSDK\Requests\All;
use Shstkvch\ShopWiredPHPSDK\Requests\Get;

class Countries
{
    use All, Get;

    public static $endpoint = '/v1/countries';
}
