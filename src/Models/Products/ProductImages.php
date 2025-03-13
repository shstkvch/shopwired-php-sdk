<?php

namespace Shstkvch\ShopWiredPHPSDK\Models\Products;

use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubAll;
use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubCreate;
use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubDelete;
use Shstkvch\ShopWiredPHPSDK\Requests\Extending\SubUpdate;

class ProductImages
{
    use SubAll, SubCreate, SubUpdate, SubDelete;

    protected static $extends = Products::class;
    protected static $endpoint = 'images';
}
