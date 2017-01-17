<?php

namespace Ulabox\SystemClock;

interface SystemClock
{
    /**
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable;
}
