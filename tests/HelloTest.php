<?php
use PHPUnit\Framework\TestCase;

require_once 'hello.php';

class HelloTest extends TestCase {
    public function testDefaultGreeting(): void {
        $this->assertEquals('hello world!', sayHello());
    }

    public function testCustomNameGreeting(): void {
        $this->assertEquals('hello Alice!', sayHello('Alice'));
    }
}