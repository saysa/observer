<?php

declare(strict_types=1);

namespace Saysa\Observer\Tests;

use Saysa\Observer\EventDispatcher;
use PHPUnit\Framework\TestCase;
use Saysa\Observer\Tests\Fixtures\FooEvent;
use Saysa\Observer\Tests\Fixtures\FooListener;

class EventDispatcherTest extends TestCase
{
    public function testIdDispatchIsSuccessful(): void
    {
        $eventDispatcher = new EventDispatcher();

        $event = new FooEvent("qux");

        $eventListener = new FooListener();

        $eventDispatcher->attach(FooEvent::getName(), $eventListener);

        $this->assertEquals("qux", $event->getTest());

        $eventDispatcher->dispatch(FooEvent::getName(), $event);

        $this->assertEquals("bar", $event->getTest());


    }
}