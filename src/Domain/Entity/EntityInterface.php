<?php

namespace CocoJr\CleanArchitecture\Domain\Entity;

interface EntityInterface
{
    public function getId(): ?int;
    public function setId(?int $id): self;
}
