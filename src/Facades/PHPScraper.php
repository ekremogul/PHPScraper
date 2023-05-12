<?php

namespace Ekremogul\PHPScraper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ekremogul\PHPScraper\PHPScraper
 */
class PHPScraper extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ekremogul\PHPScraper\PHPScraper::class;
    }
}
