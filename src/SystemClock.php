<?php

namespace Ulabox\SystemClock;

interface SystemClock
{
    /**
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable;

    /**
     * @return float
     */
    public function microtime(): float;
}
