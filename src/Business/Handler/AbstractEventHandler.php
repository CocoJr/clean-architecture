<?php

namespace CocoJr\CleanArchitecture\Business\Handler;

use CocoJr\CleanArchitecture\Business\Service\CommandDispatcherInterface;
use CocoJr\CleanArchitecture\Business\Service\QueryDispatcherInterface;

abstract class AbstractEventHandler
{
    protected CommandDispatcherInterface $commandDispatcher;
    protected QueryDispatcherInterface $queryDispatcher;

    public function __construct(CommandDispatcherInterface $commandDispatcher, QueryDispatcherInterface $queryDispatcher)
    {
        $this->commandDispatcher = $commandDispatcher;
        $this->queryDispatcher = $queryDispatcher;
    }
}
