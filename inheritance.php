<?php
class employee{
    public $name;
    public $age;
    public $salary;


public function __construct($a,$b,$c) {
    $this-> name = $a;
    $this -> age = $b;
    $this -> salary = $c;
}

//  function __construct() {
//     echo "Employee constructor";
//  }

function info (){
    echo"<h3> Employee Profile</h3>";
    echo "Employee Name:" . $this-> name . "<br>";
    echo "Employee Age:" .  $this -> age. "<br>";
    echo "Employee salary:" . $this -> salary . "<br>";
}

}

class manager extends employee{
    // public function __construct() {
    //     echo "manager constructor";
    // }
}

// $e1 = new employee("ram",25,2000);
$e1 = new manager("ram",25,2000);
$e1 -> info();



?>