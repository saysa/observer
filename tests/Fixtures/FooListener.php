<?php

declare(strict_types=1);

namespace Saysa\Observer\Tests\Fixtures;


use Saysa\Observer\EventInterface;
use Saysa\Observer\EventListenerInterface;

class FooListener implements EventListenerInterface
{

    /**
     * @param ?FooEvent $event
     */
    public function listen(?EventInterface $event): void
    {
        $event->setTest("bar");
    }
}