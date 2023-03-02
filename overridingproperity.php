<?php
class base{
    public $name="parent class";
    public function calculation($a,$b){
        return $a*$b;
    }
}
class derivied extends base{
    public $name="child class";
    public function calculation($a,$b){
        echo $a+$b;
    }
}
$s1=new derivied();
echo $s1->calculation(12,14);







?>