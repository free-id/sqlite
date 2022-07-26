<?php

declare(strict_types=1);

namespace VendorName\Skeleton;

use FreeId\Core\Parser as BaseParser;

class Parser extends BaseParser
{
    public function __construct() {
        // Constructor code ...
    }

    public function find(): int
    {
        // Parser code ...

        return $this->enumerate();
    }
}
