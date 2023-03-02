<?php
interface parent1{

    function calculation($a,$b);
}
interface parent2{
    function substration($c,$d);
}
class child implements parent1,parent2{
    public function calculation($a, $b)
    {
        return $a*$b;
    }
    public function substration($c, $d)
    {
        return $c-$d;
    }
}
$s1=new child();
echo $s1->calculation(12,12)."<br>";
echo $s1->substration(12,10);

//in interface we does not decleare properities
//we cant given accencess modifiers like private or protected;
//we can join by impliments like keywords
// in inerface when we asssign method and if we given parameter that will we eqal into childclass








?>