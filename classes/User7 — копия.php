<?php 
class User
{
    public function __construct(public readonly string $name, public readonly string $surname, private $birthday, private $age = 0)// private $birthday = date('Y:m:d'))
    {
       $this->age = $this->calculateAge();
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getAge()
    {
        return $this->age;
    }
    private function currentDate(){
      return date("Y:m:d");
    }
    
    private function currentDateOnArray()
    {
        $date = $this->currentDate();
        return explode(":", $date);
    }
    private function getArrayBirthday()
    {
        $bday= $this->getBirthday();
        return explode(":", $bday);
    }

    private function calculateAge()
    {
        $date1 = $this->getArrayBirthday();
        $date2 = $this->currentDateOnArray();
        if($date2[1]>=$date1[1] && $date2[2] >=$date1[2])
        {
        $currenAge = $date2[0] - $date1[0];
        }
        else
        {
            $currenAge = $date2[0]-$date1[0] - 1;  
        }
        return $currenAge;
    }
    
}
?>