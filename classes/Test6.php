<?php
require_once "./classes/Trait1.php";
require_once "./classes/Trait2.php";
require_once "./classes/Trait3.php";
class Test
{
    use Trait1,Trait2, Trait3
    {
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        Trait1::method as public method11;
        Trait2::method as method21;
        Trait3::method as method31;
    }
    public function SumMethids()
    {
        return $this->method1()+ $this->method2() + $this->method3();
    }

    public function GetSum()
    {
        return $this->method11()+$this->method21()+$this->method31();
    }
}
?>