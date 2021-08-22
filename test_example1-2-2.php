<?php
use PHPUnit\Framework\TestCase;

class MyTestCase extends TestCase
{
    public function test_test1(): void
    {
        //Trueかどうかチェックする
        $this->assertTrue(true);
    }
    public function test_test2(): void
    {
        $this->assertTrue(true);
    }
}
