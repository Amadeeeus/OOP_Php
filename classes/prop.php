<?php 
class Prop
{
    private $value;
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getVal()
    {
        return $this->value;
    }
}
?>