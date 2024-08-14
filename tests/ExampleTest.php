<?php

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testSayHello()
    {
        $example = new Example();
        $this->expectOutputString('Hello, World!');
        $example->sayHello();
    }
}
