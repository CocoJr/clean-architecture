<?php

namespace CocoJr\CleanArchitecture\Business\Service;

use CocoJr\CleanArchitecture\Business\Message\AbstractMessage;
use CocoJr\CleanArchitecture\Business\AbstractResponse;

interface DispatcherInterface
{
    public function dispatch(AbstractMessage $message): object;
    public function getResult(object $message): ?object;
    public function dispatchAndGetResult(AbstractMessage $message): ?AbstractResponse;
}
