<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Categorisation;

use Shstkvch\ShopWiredPHPSDK\Requests\All;
use Shstkvch\ShopWiredPHPSDK\Requests\Count;
use Shstkvch\ShopWiredPHPSDK\Requests\Create;
use Shstkvch\ShopWiredPHPSDK\Requests\Delete;
use Shstkvch\ShopWiredPHPSDK\Requests\Get;
use Shstkvch\ShopWiredPHPSDK\Requests\Update;

class Tags
{
    use All, Count, Get, Create, Update, Delete;

    public static $endpoint = '/v1/tags';
}
