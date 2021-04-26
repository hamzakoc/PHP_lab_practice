<?php


class FinalClass
{

    final function calculate($value1,$value2){

        $sum= $value1+$value2;
        echo "Sum of the two numbers is " . $sum;

    }



}


class ChildFinalClass extends FinalClass{


//       function calculate($value1,$value2){
//
//            $mult= $value1*$value2;
//            echo "Multiplication of the two numbers is " . $mult;
//
//        }

}


$obj = new ChildFinalClass();
$obj->calculate(10,20);

final class FinalBaseClass{
    function printData($val1,$val2){
        $add= $val1+$val2;
        echo "Sum of the 2 numbers is" . $add;
    }

}

//class ChildClass extends FinalBaseClass{
//    function printData($val1,$val2){
//        $m= $val1*$val2;
//        echo "Multiplication of the 2 numbers is" . $am;
//    }
}

$obj = new ChildClass();
$obj->calculate(10,20);