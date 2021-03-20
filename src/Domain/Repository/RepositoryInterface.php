<?php

namespace CocoJr\CleanArchitecture\Domain\Repository;

use CocoJr\CleanArchitecture\Domain\Entity\EntityInterface;

interface RepositoryInterface
{
    public function getNewEntity(): EntityInterface;

    public function save(EntityInterface $entity): void;
}
