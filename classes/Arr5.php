<?php 
class Arr
{
    public function __construct(private $arr = [])
    {

    }

    public function add($arr)
    {
        $this->arr[] = $arr;
        return $this;
    }

    public function getSum()
    {
        return array_sum($this->arr);
    }

    public function __tostring()
    {
        return (string)$this->getSum();
    }
}
?>