<?php

namespace Ulabox\SystemClock\Infrastructure;

use Ulabox\SystemClock\SystemClock as SystemClockInterface;

class SystemClock implements SystemClockInterface
{
    /**
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }

    /**
     * @return float
     */
    public function microtime(): float
    {
        return microtime(true);
    }
}
