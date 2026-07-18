<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    public function test_add_two_num()
    {
        $this->assertSame(4, 4);
    }
}
