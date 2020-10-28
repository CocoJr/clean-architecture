<?php

namespace CocoJr\CleanArchitecture\Business\Request\Validator;

use ArrayIterator;
use CocoJr\CleanArchitecture\Business\Request\AbstractRequest;

interface RequestValidatorInterface
{
    public function validateRequest(AbstractRequest $request): ArrayIterator;
}