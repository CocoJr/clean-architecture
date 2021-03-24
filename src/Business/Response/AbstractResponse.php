<?php

namespace CocoJr\CleanArchitecture\Business\Response;

use CocoJr\CleanArchitecture\Business\Service\AbstractDTO;
use CocoJr\CleanArchitecture\Exception\ResponseException;

abstract class AbstractResponse extends AbstractDTO
{
    public function __set($name, $value)
    {
        throw new ResponseException($name);
    }

    public function __get($name)
    {
        throw new ResponseException($name);
    }

    public function isSuccess(): bool
    {
        return empty($this->getErrors());
    }
}
