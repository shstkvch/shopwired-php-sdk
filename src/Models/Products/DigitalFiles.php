<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Products;

use Shstkvch\ShopWiredPHPSDK\Requests\All;
use Shstkvch\ShopWiredPHPSDK\Requests\Create;
use Shstkvch\ShopWiredPHPSDK\Requests\Delete;
use Shstkvch\ShopWiredPHPSDK\Requests\Get;
use Shstkvch\ShopWiredPHPSDK\Requests\Update;

class DigitalFiles
{
    use All, Get, Create, Update, Delete;

    public static $endpoint = '/v1/digital-files';
}
