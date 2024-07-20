<?php
class Test
{
    public static $staticProperty;
    public $usualProperty;

    public function method()
    {
        var_dump(self::$staticProperty);
        var_dump($this->usualProperty);
    }
}  
?>