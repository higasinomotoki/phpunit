<?php
class Calculator
{
    /**
    * @param int $a
    * @param int $b
    * @return int
    */
    public function add($a, $b): int
    {
        return $a + $b;
    }
    /**
    * @param int $a
    * @param int $b
    * @return int
    */
    public function sub($a, $b): int
    {
        return $a - $b;
    }
    /**
    * @param int $a
    * @param int $b
    * @return int
    */
    public function mul($a, $b): int
    {
        return $a * $b;
    }
    /**
    * @param int $a
    * @param int $b
    * @return int
    */
    public function div($a, $b): int
    {
        return $a / $b;
    }
}
