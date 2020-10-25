<?php

namespace CocoJr\CleanArchitecture\Business;

use Exception;

abstract class AbstractRequest
{
    public function __set($name, $value)
    {
        throw new Exception("Property ".$name." doesn't exist in ".get_class($this)." class");
    }

    public function __get($name)
    {
        throw new Exception("Property ".$name." doesn't exist in ".get_class($this)." class");
    }
}
