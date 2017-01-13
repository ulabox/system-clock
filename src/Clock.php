<?php

namespace Ulabox;

class Clock implements SystemClock
{
    /**
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }
}
