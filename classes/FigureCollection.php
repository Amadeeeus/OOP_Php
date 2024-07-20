<?php 
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

    public function getTotalSquare()
    {
        $sum =0;
        foreach($this->figures as $value)
        {
          $sum+=$value->getSquare();
        }
        return $sum;
    }

    public function getTotalPerimeter()
    {
        $sum = 0;
        foreach($this->figures as $value)
        {
            $sum += $value->getPerimeter(); 
        }
        return $sum;
    }
}
?>