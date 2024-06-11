<?php

namespace Src;

use PHPUnit\Framework\TestCase;

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    public function test_init()
    {
        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    public function test_greeting()
    {
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
    }
}
