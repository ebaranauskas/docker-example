<?php

declare(strict_types=1);

namespace AppTest;

use App\Stuff;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Stuff
 */
final class StuffTest extends TestCase
{
    public function testIncrease(): void
    {
        self::assertSame(2, (new Stuff())->increase(1));
    }
}
