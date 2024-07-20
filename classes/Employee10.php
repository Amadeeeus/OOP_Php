<?php 
require_once "./classes/post.php";
class Employee1
{
    public function __construct(private $name, private $surname,private Post $post)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function setSurname($surname)
    {
      $this->surname = $surname;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    public function getPost()
    {
        return $this->post->getPost();
    }

    public function getSalary()
    {
        return $this->post->getSalary();
    }

    public function changePost(Post $post)
    {
         $this->post = $post;
    }
}
?>