<h1>Применение интерфейсов в ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>
class FigureCollection
{
    public function __construct(private $figures = [])
    {
        
    }

    public function add(Figure $figures)
    {
        $this->figures[] = $figures;
    }

    public function show()
    {
        return $this->figures;
    }
}


</pre><br>
<?php 
require_once "./classes/FigureInt.php";
require_once "./classes/quadrate2.php";
require_once "./classes/disk.php";
require_once "./classes/FigureCollection.php";
$figures = new FigureCollection;
$figures->add(new Disk(40));
$figures->add(new Disk(50));
$figures->add(new Disk(30));
$figures->add(new Quadrate(10));
$figures->add(new Quadrate(5));
$figures->add(new Quadrate(16));
$a = $figures->show();
echo "<pre>";
print_r($a);
echo "</pre>";
echo "Сумма = ".$figures->getTotalSquare()."<br>";
echo "Периметры = ".$figures->getTotalPerimeter()."<br>";
?>