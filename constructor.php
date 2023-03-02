<?php
//before using constructor
class Personfirst{
  public $name,$age;
  function Show(){
    echo $this->name ."-". $this->age."<br>";
  }
}
$s1=new Personfirst();
$s1->name="chandresh pachauri";
$s1->age="22";//to avoid this line we are using constructor
$s1->Show();//to avoid this line we are using constructor
//using constructor:

class Personsecond{
    public $name,$age;
    function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }
    function Show(){
        echo $this->name."_".$this->age;
    }
}
$s2=new Personsecond("amit singh","21");
$s2->Show();

?>