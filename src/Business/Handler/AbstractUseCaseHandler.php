<?php

namespace CocoJr\CleanArchitecture\Business\Handler;

use CocoJr\CleanArchitecture\Business\Service\CommandDispatcherInterface;
use CocoJr\CleanArchitecture\Business\Service\EventDispatcherInterface;
use CocoJr\CleanArchitecture\Business\Service\QueryDispatcherInterface;

abstract class AbstractUseCaseHandler
{
    protected CommandDispatcherInterface $commandDispatcher;
    protected QueryDispatcherInterface $queryDispatcher;
    protected EventDispatcherInterface $eventDispatcher;

    public function __construct(CommandDispatcherInterface $commandDispatcher, QueryDispatcherInterface $queryDispatcher, EventDispatcherInterface $eventDispatcher)
    {
        $this->commandDispatcher = $commandDispatcher;
        $this->queryDispatcher = $queryDispatcher;
        $this->eventDispatcher = $eventDispatcher;
    }
}
