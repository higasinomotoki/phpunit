<?php

use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase{
    /**
     * @test
     */
    public function test_equal()
    {
        $result = 1 + 2;
        $this->assertEquals(3,$result);
    }
    public function test_notequal(){
        $result = 1 + 2;
        $this->assertNotEquals(100,$result);
    }
}