<?php

namespace CocoJr\CleanArchitecture\Domain\Entity;

abstract class AbstractEntity implements EntityInterface
{
    protected ?int $id;

    public function __construct()
    {
        $this->id = null;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }
}
