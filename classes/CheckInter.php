<?php 
class checkInter
{
    public function __construct(private $a = [])
    {
        
    }

    public function add($arr)
    {
        $this->a[] = $arr;
    }

    public function getNon3D()
    {
        foreach($this->a as $val)
        {
            if($val instanceof iFigure)
            {
                echo "Площадь iFigure = ".$val->getSquare()."<br>";
            }
        }
    }

    public function getAllSq()
    {
        foreach($this->a as $val)
        {
            if($val instanceof iFigure)
            {
                echo "Площадь плоских iFigure = ".$val->getSquare()."<br>";
            }
            if($val instanceof iFigure3d)
            {
                echo "Площадь поверхностей обьемныъ = ".$val->getSurfaceSquare()."<br>";
            }
        }
    }
}
?>