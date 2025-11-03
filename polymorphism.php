<!-- same operation may be behave differently in different class -->
<!-- abstract -->
<!-- Interface -->




<?php

//abstract:
// abstract class class1{
//     abstract function fun1();
// }

// class class2 extends class1{
//  function fun1(){
//     echo "fun1";
// }
// }

// class class3 extends class2{
//  function fun1(){

//     echo "fun2";
// }
// }



// $obj1 = new class2();
// $obj1 -> fun1();



//interface
interface class1{
    function fun1();
}

class class2 implements class1{
 function fun1(){
    echo "fun1";
}
}

class class3 implements class1{
 function fun1(){

    echo "fun2";
}
}

$obj1 = new class3();
$obj1 -> fun1();


?>