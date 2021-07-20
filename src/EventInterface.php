<?php

declare(strict_types=1);

namespace Saysa\Observer;


interface EventInterface
{
    public static function getName(): string;
}