<?php

namespace Tests\Unit;

use Tests\TestCase;

class GanjilGenapHelperTest extends TestCase
{
    public function test_bilangan_genap()
    {
        $this->assertTrue($this->isEven(2));
        $this->assertTrue($this->isEven(10));
    }

    public function test_bilangan_ganjil()
    {
        $this->assertFalse($this->isEven(3));
        $this->assertFalse($this->isEven(7));
    }

    private function isEven($n)
    {
        return $n % 2 === 0;
    }
}
