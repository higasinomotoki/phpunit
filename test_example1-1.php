<?php
require("vendor/autoload.php");
use PHPUnit\Framework\TestCase;
class MyTestCase extends TestCase
{
    public function testExample() {
        $expected = 'hoge';
        $this->assertEquals($expected, 'hoge');
    }
    // public function test_add(){
    //     $this->assertEquals(3,add(1,2));
    // }
}
