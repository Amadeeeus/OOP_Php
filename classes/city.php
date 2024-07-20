<?php 
class City
{
    public $name;
    public $population;
    
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPopulation($population)
    {
        $this->population = $population;
    }
   
    public function getName()
    {
        return $this->name;
    }

    public function getPopulation()
    {
        return $this->population;
    }

public function combineToArray($name, $population)
{
    $array = ["name" => $name, "population"=>$population];
    return $array;
}
}
?>