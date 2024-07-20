<?php
require_once "./classes/iMath.php";
class Math implements iMath
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function substract($a, $b)
    {
        return $a-$b;
    }

    public function divide($a, $b)
    {
        return $a/$b;
    }

    public function multiply($a, $b)
    {
        return $a*$b;
    }
}
?>