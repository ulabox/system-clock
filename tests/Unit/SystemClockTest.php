<?php

namespace Ulabox\Tests\Unit;

use Ulabox\SystemClock;
use Ulabox\Clock;

class ClockTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SystemClock
     */
    private $sut;

    public function setUp()
    {
        $this->sut = new Clock();
    }

    public function testImplementsSystemClockInterface()
    {
        $this->assertInstanceOf(SystemClock::class, $this->sut);
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
}
