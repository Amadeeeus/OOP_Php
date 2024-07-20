<?php
class User1
{
    public function __construct(private $name, private $surname, private $patronymic)
    {

    }
    public function __toString()
    {
        return $this->name." ".$this->surname." ".$this->patronymic;
    }
}
?>