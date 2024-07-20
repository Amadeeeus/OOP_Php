<?php 
class Practice
{
    public function __construct(private $arr = [])
    {
        
    }
    public function add($arr)
    {
        $this->arr[] = $arr; 
    }

    public function getInfo()
    {
        foreach($this->arr as $val)
        {
           echo "Имя =".$val->name."<br>"."Класс = ".get_class($val);
        }
    }

    
}
?>