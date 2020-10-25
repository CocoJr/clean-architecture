<?php

namespace CocoJr\CleanArchitecture\Business\Service;

use ArrayIterator;

interface ValidatorServiceInterface
{
    public function validate(EntityInterface $entity, ?array $validationGroup = null): ArrayIterator;
}
