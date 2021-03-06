<?php

namespace App\Trident\Base\Typed\Maps;

use Spatie\Typed\Map;
use Spatie\Typed\T;

class MapStringFloat extends Map
{
    public function __construct()
    {
        parent::__construct(T::string(),T::float());
    }
}

