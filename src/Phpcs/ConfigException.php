<?php

namespace Kamazee\PrFilter\Phpcs;

use Kamazee\PrFilter\Exception;
use Kamazee\PrFilter\Xml\Exception as XmlException;

class ConfigException extends Exception
{
    const CANT_READ_CONFIG_CODE = 2;

    public static function cantReadConfig($filename, XmlException $e)
    {
        return new self(
            "Can't read config from $filename: {$e->message}",
            self::CANT_READ_CONFIG_CODE
        );
    }
}
