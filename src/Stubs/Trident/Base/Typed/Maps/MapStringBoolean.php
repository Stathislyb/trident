<?php

namespace App\Trident\Base\Typed\Maps;

use Spatie\Typed\Map;
use Spatie\Typed\T;

class MapStringBoolean extends Map
{
    public function __construct()
    {
        parent::__construct(T::string(),T::boolean());
    }
}

