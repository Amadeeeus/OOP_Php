<?php 
require_once "./classes/DateClass.php";
class Interval
{
    public function __construct(private Date $date1,private Date $date2,private $diff = null)
    {
        $diff = strtotime($this->date1)-strtotime($this->date2);
        $this->diff = $diff;
    }
    
    public function getDiff()
    {
        return $this->diff;
    }
    public function __get($name)
    {
        return $this->$name;
    }

    public function toDays()
    {
        $value = $this->diff/86400;
        echo "znachenie".$value."<br>";
        return $value;
    }
    public function toMonths()
    {
        return $value = $this->diff/2592000;
    }
    public function toYears()
    {
      return $value = $this->diff/31536000; 
    }
}

?>