<?php

namespace CocoJr\CleanArchitecture\Business;

use ArrayIterator;
use Exception;
use ReflectionObject;
use ReflectionProperty;

abstract class AbstractResponse
{
    private ?ArrayIterator $errors = null;

    public function setErrors(ArrayIterator $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    public function addError(string $path, string $message): self
    {
        if (!$this->errors) {
            $this->errors = new ArrayIterator();
        }

        if (!array_key_exists($path, (array) $this->errors)) {
            $this->errors[$path] = [];
        }

        $this->errors[$path][] = $message;

        return $this;
    }

    public function getErrors(): ?ArrayIterator
    {
        if (!$this->errors || !count($this->errors)) {
            return null;
        }

        return $this->errors;
    }

    public function isSuccess(): bool
    {
        return empty($this->getErrors());
    }

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
