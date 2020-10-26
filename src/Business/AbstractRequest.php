<?php

namespace CocoJr\CleanArchitecture\Business;

use Exception;
use ReflectionObject;
use ReflectionProperty;

abstract class AbstractRequest
{
    public function toData(): array
    {
        $data = [];
        $reflectionProperties = (new ReflectionObject($this))->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($reflectionProperties as $property) {
            $data[$property->getName()] = $this->{$property->getName()};
        }

        return $data;
    }

    public function __set($name, $value)
    {
        throw new Exception("Property ".$name." doesn't exist in ".get_class($this)." class");
    }

    public function __get($name)
    {
        throw new Exception("Property ".$name." doesn't exist in ".get_class($this)." class");
    }
}
