<span>Передача обьектов по ссылке</span><br><br>
<span>Исходный код</span><br>
<pre>
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

require_once "./classes/product.php";
$product  = new Product("Молоко", 20000);
echo "Имя= ".$product->getName()."\n"."Цена= ".$product->getPrice()."\n";
$test = $product;
echo "Имя= ".$test->getName()."\n"."Цена= ".$test->getPrice()."\n";
$test->setName("Говядина");
echo "Имя= ".$product->getName()."\n"."Цена= ".$product->getPrice()."\n";
echo "Имя= ".$test->getName()."\n"."Цена= ".$test->getPrice()."\n";
$product = 1;
echo $product."\n";
echo "Имя= ".$test->getName()."\n"."Цена= ".$test->getPrice()."\n";
</pre><br>
<?php 
require_once "./classes/product.php";
$product  = new Product("Молоко", 20000);
echo "Имя= ".$product->getName()."\n"."Цена= ".$product->getPrice()."\n";
$test = $product;
echo "Имя= ".$test->getName()."\n"."Цена= ".$test->getPrice()."\n";
$test->setName("Говядина");
echo "Имя= ".$product->getName()."\n"."Цена= ".$product->getPrice()."\n";
echo "Имя= ".$test->getName()."\n"."Цена= ".$test->getPrice()."\n";
$product = 1;
echo $product."\n";
echo "Имя= ".$test->getName()."\n"."Цена= ".$test->getPrice()."\n";
?>