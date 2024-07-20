<?php 
class Post{
    public function __construct(private $post, private $salary)
    {
        
    }
    public function getPost()
    {
        return $this->post;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
?>