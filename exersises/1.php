
   <span>
    Введение в классы и обьекты PHP
</span> 
<?php 
class Car{
    public $color;
    public $fuel;
    public $wheel;
    public $brake;

    public function go(){
       echo $this->fuel;
    }
    public function turn(){
       echo $this->wheel;
    }
    public function stop(){
        echo $this->brake;
    }
}

$car = new Car;
$car->color = "red";
$car->fuel = "full";
$car->wheel = "right";
$car->brake = "on";
$car->go();
$car->turn();
$car->stop();

?>
