<?php

namespace CocoJr\CleanArchitecture\Business;

use ArrayIterator;

interface RequestValidatorInterface
{
    public function validateRequest(AbstractRequest $request): ArrayIterator;
}
