<?php 

Class Form extends Tag
{
    public function __construct()
    {
        parent::__construct('form');
    }
    public function form($func1 = [], $attrs = [], $text)
    {
        echo $this->open();
        foreach($attrs as $name => $value)
        {
           $this->setAttr($name,$value);
        }
      foreach($func1 as $name => $value)
      {
        $this->$name = New $name;
        $method = strtolower($name);
        $this->$name->$method($value, $text);
      }
      echo $this->close();
    }
}
?>