<?php
use PHPUnit\Framework\TestCase;

/**
 * falseならテスト失敗
 * 結果　↓
 *
 * PHPUnit 8.5.18 by Sebastian Bergmann and contributors.
 * F. 2 / 2 (100%)
 * Time: 129 ms, Memory: 4.00 MB
 * There was 1 failure:
 * 1) MyTestCase::test_test1
 * Failed asserting that false is true.
 * /var/www/test_example1-2-3.php:10
 * FAILURES!
 * Tests: 2, Assertions: 2, Failures: 1.
 **/
class MyTestCase extends TestCase
{
    public function test_test1(): void
    {
        $this->assertTrue(false);
    }
    /**
     * ここに@testとつければメソッドにtestとつけなくてもテストメソッドになる
     * @test
     */
    public function annotation_test(): void
    {
        $this->assertTrue(true);
    }
}
