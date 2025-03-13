<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Products;

use Shstkvch\ShopWiredPHPSDK\Requests\Create;
use Shstkvch\ShopWiredPHPSDK\Requests\Delete;
use Shstkvch\ShopWiredPHPSDK\Requests\Update;

class ChoiceSetValues
{
    use Create, Update, Delete;

    public static $endpoint = '/v1/choice-set-values';
}
