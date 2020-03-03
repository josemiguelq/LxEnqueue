<?php

namespace LxEnqueue;

use Enqueue\Consumption\Result;
use Interop\Queue\Context;
use Interop\Queue\Message;
use Interop\Queue\Processor;

abstract class ProcessBehavior implements Processor
{
    abstract function handle($data);

    public function process(Message $message, Context $context)
    {
        $this->handle(json_decode($message->getBody(), true));
        return Result::ACK;
    }
}
