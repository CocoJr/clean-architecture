<?php

namespace CocoJr\CleanArchitecture\Business\Message;

use CocoJr\CleanArchitecture\Business\AbstractRequest;
use DateTime;

abstract class AbstractEventMessage extends AbstractMessage
{
    protected DateTime $triggeredAt;

    public function __construct(AbstractRequest $request)
    {
        $this->triggeredAt = new DateTime();

        parent::__construct($request);
    }

    /**
     * @return DateTime
     */
    public function getTriggeredAt(): DateTime
    {
        return $this->triggeredAt;
    }
}
