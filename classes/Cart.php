<?php 
class Cart
{
 private $products = [];

 public function AddProduct($product)
{
    $this->products[]= $product;
}
public function getProducts()
{
    return $this->products;
}
public function DeleteProduct($product)
{
    echo $product;
    foreach($this->products as $key => $obj)
    {
        if($obj->getName() === $product)
        {
            echo "!!";
            unset($this->products[$key]);
        }
    }
}

public function getTotalCost()
{
    $sum=0;
  foreach($this->products as $obj)
  {
     $sum+= $obj->getCost();
  }
  return $sum;
}
public function getTotalQuantity()
{
    $sum=0;
    foreach($this->products as $obj)
    {
       $sum+= $obj->getQuantity();
    }
    return $sum;
}

public function getAvgPrice()
{
   return $this->getTotalCost()/$this->getTotalQuantity();
}
}
?>