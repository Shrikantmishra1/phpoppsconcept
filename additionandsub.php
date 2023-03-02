<?php
class Calculation{
    //this is property
    public $a,$b,$c;

    //these are method 
    function Sum(){
        $this->c=$this->a+ $this->b;
        return $this->c;
    }
    function Sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
//this is making object
$c1=new Calculation();
//asign value in properties
$c1->a=12;
$c1->b=20;
  echo "this is addition using class".$c1->Sum()."<br>";

$c2=new Calculation();
$c2->a=30;
$c2->b=50;
//this calling that method
echo "this is substraction using class." .$c2->Sub()."<br>";
?>