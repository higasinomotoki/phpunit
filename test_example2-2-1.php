<?php

use PHPUnit\Framework\TestCase;

require_once 'calc.php';
class MyTestCase extends TestCase
{
    /**
     * @Route("Route", name="RouteName")
     */
    public function test_add()
    {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add(6, 2));
    }
}
