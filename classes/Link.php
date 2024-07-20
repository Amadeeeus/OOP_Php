<?php
require_once $_SERVER['DOCUMENT_ROOT']."/classes/Tag.php";
class Link extends Tag
{
    const ACTIVE = 'active';
    public function __construct()
    {
     parent::__construct("a");
     $this->setAttr("href","");   
    }
    

    public function open()
    {
        $this->activateSelf();
        return parent::open();
    }
    public function __tostring()
    {
        return parent::show();
    }

    public function link($attr=[], $text = "Ссылка")
    {
       $this->setAttrs($attr);
       echo $this->text($text)->show();
    } 

    private function activateSelf()
    {
        if($this->getAttr('href') === $_SERVER['REQUEST_URI'])
        {
            $this->addClass(self::ACTIVE);
        }
    }
}
?>