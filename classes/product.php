<?php 
class Product
{
    public function  __construct(private $name, private $price)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
}
?>