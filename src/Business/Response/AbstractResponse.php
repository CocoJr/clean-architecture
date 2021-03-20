<?php

namespace CocoJr\CleanArchitecture\Business\Response;

use CocoJr\CleanArchitecture\Business\Service\AbstractDTO;

abstract class AbstractResponse extends AbstractDTO
{
    private bool $isNotAllowed = false;
    private bool $isNotFound = false;

    public function __set($name, $value)
    {
        $this->addError('global', $name.' not exist.');

        return null;
    }

    public function __get($name)
    {
        $this->addError('global', $name.' not exist.');

        return null;
    }

    public function getIsNotAllowed(): bool
    {
        return $this->isNotAllowed;
    }

    public function setIsNotAllowed(bool $value = true): self
    {
        $this->isNotAllowed = $value;

        return $this;
    }

    public function getIsNotFound(): bool
    {
        return $this->isNotFound;
    }

    public function setIsNotFound(bool $value = true): self
    {
        $this->isNotFound = $value;

        return $this;
    }

    public function isSuccess(): bool
    {
        return empty($this->getErrors())
            && !$this->isNotAllowed
            && !$this->isNotFound
            ;
    }
}
