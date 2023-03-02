<?php
abstract class parentclass{
   public $name;
   abstract protected function calculation($a,$b);
}
 class childclass extends parentclass{
   
    public function calculation($a,$b){
        return $a*$b;
    }
 }
 $s1=new childclass();
echo $s1->name="ti";
echo  $s1->calculation(12,32);




?>