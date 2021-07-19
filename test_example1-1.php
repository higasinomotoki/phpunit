<?php
require("vendor/autoload.php");
use PHPUnit\Framework\TestCase;
class MyTestCase extends TestCase
{
    /**
     * @test
     */
    public function firstExample()
    {
        $expected = 'hoge';
        $this->assertEquals($expected, 'hoge');
    }

    /**
     * @test
     */
    public function second_test1()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function srad_test2()
    {
        $this->assertTrue(true);
    }
}
