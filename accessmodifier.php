<?php
class base{
protected $name;
protected function  __construct($n){
   $this->name=$n;
}
protected function Show(){
    echo "Name:"."-".$this->name;
}
}
class pro extends base{
    public $name;
public function  __construct($n){
   $this->name=$n;
}
public function monu(){
    echo "Name:"."-".$this->name;
}
}
$s1=new  pro("s455t");
$s1->monu();

//
//$s1=new base("s455t");
//$s1->Show();



?>