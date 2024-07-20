<?php 
require_once "./classes/Employee2.php";
class Programmer extends Employee{
    private $langs;

    public function __construct()
    {
        $this->langs = ['lang1'=>'php', 'lang2'=>'js','lang3' => 'html','lang4'=>'css','lang5'=>'sql'];
    }

    public function getLangs()
    {
        return $this->langs;
    }

    public function setLangs($langs)
    {
        $this->langs = $langs;
    }
}

?>