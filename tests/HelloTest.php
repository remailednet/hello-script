<?php

declare(strict_types=1);

namespace OpenHands\HelloScript\Tests;

use OpenHands\HelloScript\Greeter;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase
{
    private Greeter $greeter;

    protected function setUp(): void
    {
        $this->greeter = new Greeter();
    }

    /**
     * @test
     */
    public function it_returns_default_greeting_when_no_name_provided(): void
    {
        $this->assertEquals('hello world!', $this->greeter->sayHello());
    }

    /**
     * @test
     */
    public function it_returns_default_greeting_when_null_provided(): void
    {
        $this->assertEquals('hello world!', $this->greeter->sayHello(null));
    }

    /**
     * @test
     */
    public function it_returns_custom_greeting_when_name_provided(): void
    {
        $this->assertEquals('hello Alice!', $this->greeter->sayHello('Alice'));
    }

    /**
     * @test
     */
    public function it_handles_empty_string_name(): void
    {
        $this->assertEquals('hello world!', $this->greeter->sayHello(''));
    }

    /**
     * @test
     */
    public function it_handles_numeric_name(): void
    {
        $this->assertEquals('hello 42!', $this->greeter->sayHello('42'));
    }
}