<?php

namespace CocoJr\CleanArchitecture\Business\Handler;

use CocoJr\CleanArchitecture\Business\Service\EventDispatcherInterface;
use CocoJr\CleanArchitecture\Domain\Repository\RepositoryInterface;

abstract class AbstractQueryHandler
{
    protected EventDispatcherInterface $eventDispatcher;
    protected RepositoryInterface $repository;

    public function __construct(EventDispatcherInterface $eventDispatcher, RepositoryInterface $repository)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->repository = $repository;
    }
}
