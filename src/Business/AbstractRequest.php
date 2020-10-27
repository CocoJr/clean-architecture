<?php

namespace CocoJr\CleanArchitecture\Business;

abstract class AbstractRequest extends AbstractDTO
{
    private RequestValidatorInterface $validator;

    public function __construct(RequestValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function validate(): bool
    {
        $errors = $this->validator->validateRequest($this);
        $this->setErrors($errors);

        return $this->isSuccess();
    }
}
