<?php 
class Tag
{
    public function __construct(private $name = 1,private $attrs= [],private $text = 1)
    {
     
    }
    public function setAttr($name, $value)
    {
       $this->attrs[$name] = $value;
       return $this;
    }

    public function removeAttrs($name)
    {
        unset($this->attrs[$name]);
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function setAttrs($attrs)
    {
        foreach($attrs as $name => $value)
        {
            $this->setAttr($name, $value);
        }
        return $this; 
    }
    public function text($text)
    {
         $this->text = $text;
         return $this;
    }

    public function getText()
    {
       return $this->text;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAttrs()
    {
        return $this->attrs;
    }
    public function getAttr($name)
    {
        if(array_key_exists($name, $this->attrs))
        {
            return $this->attrs["$name"];
        }
        else
        {
            return "Ключа не существует";
        }
    }

    public function __get($name)
    {
       return $this->$name;
    }

    public function open()
    {
        $result = $this->getAtributes();
        $name = $this->name;
        return "<$name$result>";   
    }
    
    public function addClass($className)
    {
        if(isset($this->attrs['class']))
        {
            $classNames = explode(' ',$this->attrs['class']);
        
        if(!in_array($className, $classNames))
        {
            $classNames[] = $className;
            $this->attrs['class'] = implode(' ',$classNames);
        }
           }
           else
           {
            $this->attrs['class'] = $className;
           }
        return $this;
    }
    public function removeClass($className)
	{
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->
				attrs['class']); 
			
			if (in_array($className, $classNames)) {
				$classNames = $this->removeElem($className, 
					$classNames); 
				$this->attrs['class'] = implode(' 
					', $classNames); 
			}
		}
		
		return $this;
	}
    public function show()
    {
        return $this->open().$this->text.$this->close();
    }
    public function close()
    {
        $name = $this->name;
        return "</$name>";
    }
    private function removeElem($elem, $arr)
    {
      $key = array_search($elem, $arr);
      array_splice($arr, $key, 1);
      return $arr;
    }

    private function getAtributes()
    {
       $result = '';
       if(!empty($this->attrs))
       {
         foreach($this->attrs as $name => $value)
         {
            if($value=== true)
            {
                $result .=" $name"; 
            }
            $result .=' '.$name.'= "'.$value.'"';
         }
         return $result;
       }
       else
       {
        return $result = " ";
       }
    }
}
?>