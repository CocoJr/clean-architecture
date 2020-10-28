<?php

namespace CocoJr\CleanArchitecture\Business\Handler;

use CocoJr\CleanArchitecture\Business\Request\Validator\RequestValidatorInterface;
use CocoJr\CleanArchitecture\Business\Service\CommandDispatcherInterface;
use CocoJr\CleanArchitecture\Business\Service\QueryDispatcherInterface;

abstract class AbstractEventHandler
{
    protected CommandDispatcherInterface $commandDispatcher;
    protected QueryDispatcherInterface $queryDispatcher;
    protected RequestValidatorInterface $requestValidator;

    public function __construct(CommandDispatcherInterface $commandDispatcher, QueryDispatcherInterface $queryDispatcher, RequestValidatorInterface $requestValidator)
    {
        $this->commandDispatcher = $commandDispatcher;
        $this->queryDispatcher = $queryDispatcher;
        $this->requestValidator = $requestValidator;
    }
}
