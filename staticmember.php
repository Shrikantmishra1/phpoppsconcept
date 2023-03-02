<?php
class parents{
    public static $name;
   
}
class child extends parents{
    public function Show(){
        echo parent::$name;
    }
}
$s1=new child();

echo $s1->Show("shrikant");


?>