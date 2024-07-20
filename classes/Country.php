<?php 
require_once "./classes/Helper.php";
class Country
{
    use Helper;
    public function __construct(private $name, private $age, private $population)
    {
        
    }
    
    public function getPopulation()
    {
        return $this->population;
    }
}
?>