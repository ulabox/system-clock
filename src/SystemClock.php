<?php

namespace Ulabox;

interface SystemClock
{
    /**
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable;
}
