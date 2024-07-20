<?php
class EmployeeCollection
{
    public function __construct(private $employeers =[])
    {
        
    }

    public function add($emp)
    {
        if(!$this->exists($emp))
        {
            $this->employeers[] = $emp; 
        }
    }
    
    public function add_arr($emp)
    {
        if(!in_array($emp, $this->employeers, false))
        {
           $this->employeers[] = $emp;
        }
    }
    public function get()
    {
        return $this->employeers;
    }
    
    private function exists($emp)
    {
        foreach($this->employeers as $employee)
        {
            if($employee == $emp)
            {
                return true;
            }
                
        }
      return false;  
    }


}
?>