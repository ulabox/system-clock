<?php

namespace Ulabox\Tests\SystemClock\Infrastructure;

use PHPUnit\Framework\TestCase;
use Ulabox\SystemClock\Infrastructure\SystemClock;
use Ulabox\SystemClock\SystemClock as SystemClockInterface;

class SystemClockTest extends TestCase
{
    /**
     * @var SystemClock
     */
    private $sut;

    public function setUp()
    {
        $this->sut = new SystemClock();
    }

    public function testImplementsSystemClockInterface()
    {
        $this->assertInstanceOf(SystemClockInterface::class, $this->sut);
    }

    public function testReturnsDateTimeImmutables()
    {
        $this->assertInstanceOf(\DateTimeImmutable::class, $this->sut->now());
    }

    public function testChangesWithTime()
    {
        $then = $this->sut->now();
        sleep(1);
        $this->assertNotEquals($then, $this->sut->now());
    }

    public function testShouldReturnMicrotime()
    {
        $this->assertInternalType('float', $this->sut->microtime());
    }
}
