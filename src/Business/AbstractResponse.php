<?php

namespace CocoJr\CleanArchitecture\Business;

use ArrayIterator;

abstract class AbstractResponse extends AbstractDTO
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
}
