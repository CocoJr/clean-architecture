<?php

namespace CocoJr\CleanArchitecture\Business\Message;

use CocoJr\CleanArchitecture\Business\Request\AbstractRequest;

abstract class AbstractMessage
{
    protected AbstractRequest $request;

    public function __construct(AbstractRequest $request)
    {
        $this->request = $request;
    }

    public function getRequest(): AbstractRequest
    {
        return $this->request;
    }

    abstract public static function createMessage(array $requestProps = []): self;
}
