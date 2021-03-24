<?php

namespace CocoJr\CleanArchitecture\Business\Request;

use CocoJr\CleanArchitecture\Business\Service\AbstractDTO;
use CocoJr\CleanArchitecture\Exception\RequestException;

abstract class AbstractRequest extends AbstractDTO
{
    public function __set($name, $value)
    {
        throw new RequestException($name);
    }

    public function __get($name)
    {
        throw new RequestException($name);
    }
}
