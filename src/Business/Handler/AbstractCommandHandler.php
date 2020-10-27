<?php

namespace CocoJr\CleanArchitecture\Business\Handler;

use CocoJr\CleanArchitecture\Business\RequestValidatorInterface;
use CocoJr\CleanArchitecture\Business\Service\EventDispatcherInterface;
use CocoJr\CleanArchitecture\Domain\Repository\RepositoryInterface;

abstract class AbstractCommandHandler
{
    protected EventDispatcherInterface $eventDispatcher;
    protected RepositoryInterface $repository;
    protected RequestValidatorInterface $requestValidator;

    public function __construct(EventDispatcherInterface $eventDispatcher, RepositoryInterface $repository, RequestValidatorInterface $requestValidator)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->repository = $repository;
        $this->requestValidator = $requestValidator;
    }
}
