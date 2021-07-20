<?php

declare(strict_types=1);

namespace Saysa\Observer;


interface EventListenerInterface
{
    public function listen(?EventInterface $event): void;
}