<span>Обращение к методам класса через $this и модификаторы доступа</span><br><br>
<?php
class User
{
    private $age;
    private $name;
    
    function __construct($age = 20)
    {
        $this->age=$age;
    }
    
    public function setAge($age){
       if($this->isAgeCorrect($age))
       {
         $this->age = $age;
       }
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    
    public function addAge($year)
    {
      $newage = $this->age+$year;
      if($this->isAgeCorrect($newage))
      {
         $this->age = $newage;
      }
    }
    public function subAge($minus)
    {
      $newage = $this->age - $minus;
      if($this->isAgeCorrect($newage)){
         $this->age =$newage;
      }
    }
    private function isAgeCorrect($age){
    if($age >= 18 && $age <=60)
        {
            $this->age = $age;
        }
    }
}

$class = new User;
$class->setAge(28);
$class->setName("pavel");
echo $class->getAge();
echo $class->getName();
$class->addAge(16);
echo $class->getAge();
$class ->subAge(10);
echo $class->getAge();

?>
<br><br><span>Модификаторы доступа. Практика</span><br><br>
<?
class Student{
    private $name;
    private $course;

    public function __construct($course = 1)
    {
        $this->course = $course;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCourse()
    {
        return $this->course;
    }

    public function goToUpCourse(){
      $newcourse = $this->course + 1;
      if($this->isCourseCorrect($newcourse))
      {
        $this->course = $newcourse;
      }
    }
    public function goDownToCourse()
    {
        $newcourse = $this->course - 1;
        if($this->isCourseCorrect($newcourse))
        {
          $this->course = $newcourse;
        }
        
    }
    private function isCourseCorrect($course){
         if($course >= 1 && $course <=5)
         {
            $this->course = $course;
         }
         else
        {
          echo "Невозможно установить курс ниже 1 и выше 5";
        }
    }
}

$student = new Student;
$student->setName("Pavel");
echo $student->getName(),"<br>",$student->getCourse();
$student->goToUpCourse();
echo $student->getCourse();
$student->goDownToCourse();
echo $student->getCourse();


?>

