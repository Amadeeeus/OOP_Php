<span>Передача обьектов параметрами</span><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/Employee4.php";
require_once "./classes/EmployeesCollection.php";
require_once "./classes/product2.php";
require_once "./classes/Cart.php";
$col = new EmployeersCollection;
$col->add(new Employee("pavel", 20000));
$col->add(new Employee("Igor", 5000));
$col->add(new Employee("Sigma", 70000));
$emp = $col->getEmployeers();
print_r($emp);
echo $col->getTotalSalary();
?>
<br><span>задание</span><br><br>
<span>Исходный код</span><br>
<pre>
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

$cart = new Cart;
$cart->addProduct(new Product("moloko", 40,4));
$cart->addProduct(new Product("pivo", 51,8)); 
$cart->addProduct(new Product("cheese", 350,29));
$prod = $cart->getProducts();
$cart->DeleteProduct("pivo");
echo "<pre>";
$prod1 = $cart->getProducts();
print_r($prod1);
echo "</pre>";
echo "Общая стоимость= ".$cart->getTotalCost()."\n";
echo "Общee количество= ".$cart->getTotalQuantity()."\n";
echo "Средняя стоимость продуктов= ".$cart->getAvgPrice()."\n";
</pre><br>
<?php 
$cart = new Cart;
$cart->addProduct(new Product("moloko", 40,4));
$cart->addProduct(new Product("pivo", 51,8)); 
$cart->addProduct(new Product("cheese", 350,29));
$prod = $cart->getProducts();
$cart->DeleteProduct("pivo");
echo "<pre>";
$prod1 = $cart->getProducts();
print_r($prod1);
echo "</pre>";
echo "Общая стоимость= ".$cart->getTotalCost()."\n";
echo "Общee количество= ".$cart->getTotalQuantity()."\n";
echo "Средняя стоимость продуктов= ".$cart->getAvgPrice()."\n";

($x = true) and false;
echo $x;
?>