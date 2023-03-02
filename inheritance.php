<?php
  class Employee{
    public $name,$age,$salary;
    function __construct($a,$b,$c)
    {
        $this->name=$a;
        $this->age=$b;
        $this->salary=$c;
    }

    function info(){
       echo "<h4>Employee Details:  </h4>";
       echo  "Employee name:". $this->name."<br>";
       echo  "Employee age:". $this->age."<br>";
       echo  "Employee salary:". $this->salary."<br>";
    }
  }
  class Manager extends Employee{
   public $ta=2000;
   public $phone=400;
   public $totalsalary;

   function info(){
    $this->totalsalary=$this->salary+$this->phone+$this->ta;
    echo "<h4>Manager Details:  </h4>";
    echo  "manager name:". $this->name."<br>";
    echo  "manager age:". $this->age."<br>";
    echo  "manager salary:". $this->totalsalary."<br>";
 }

  }

$s1=new Employee("sumit kumar",20,20000);
$s1->info();
//base class inherite by derived class:
$s1=new Manager("mohit kumar",20,20000);
$s1->info();


?>