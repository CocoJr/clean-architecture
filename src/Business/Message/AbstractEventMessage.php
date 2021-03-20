<?php

namespace CocoJr\CleanArchitecture\Business\Message;

use CocoJr\CleanArchitecture\Business\Request\AbstractRequest;
use DateTime;

abstract class AbstractEventMessage extends AbstractMessage
{
    protected DateTime $triggeredAt;

    public function __construct(AbstractRequest $request)
    {
        $this->triggeredAt = new DateTime();

        parent::__construct($request);
    }

    public function getTriggeredAt(): DateTime
    {
        return $this->triggeredAt;
    }
}
