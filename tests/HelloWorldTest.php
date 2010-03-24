<?php

class HelloWorldTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function passingTest()
    {
        $expected = 'Hello, World!';
        $actual   = 'Hello, World!';

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function failingTest()
    {
        $this->assertTrue(false);
    }
}
