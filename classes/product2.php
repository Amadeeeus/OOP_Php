<?php 
class Product
{
    public function __construct(private $name, private string $price, private string $quantity)
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

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getCost()
    {
        return $this->getPrice() * $this->getQuantity();
    }
}

?>