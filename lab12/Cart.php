<?php


class Cart
{
    public $store ="The rockets store";
    public $items = array();



    //method exist
    public function sayHello(){
        return "Hello";
    }
}

//function method_exist

include_once("cart.php");
$myObjCart = new Cart();

if (method_exists($myObjCart, "sayHello")){
   
    echo $myObjCart->sayHello();
}else{
    echo "sayHello method does not exist";
}

/*


//class_exists function

include_once("cart.php");
if (class_exists("cart")){
    $shopping_cart=new cart();
    echo $shopping_cart->store;
}else{
    echo ""cart" class does not exist';
}


//get_class function

include_once("cart.php");
if (class_exists("cart")){
    $shopping_cart=new cart();
    echo $shopping_cart->store;
}else{
    echo '"cart" class does not exist';
}

echo "<br>";
echo ' $shopping_cart1 is an object from ' . get_class( $shopping_cart);

    */