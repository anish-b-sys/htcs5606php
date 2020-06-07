<?php
//Global variable can be used anywhere

//local variable only can be used inside a function


$a = 4;
$b = 5;

function cal(){
    echo "a = ".$GLOBALS['a']."<br>"; //a and b is global variable
    echo "b = ".$GLOBALS['b']."<br>";
    return $GLOBALS['a'] * $GLOBALS['b'];

}

function cal1(){
    $c=6; //c is local variable
    return $GLOBALS['a'] * $GLOBALS['b'] * $c;
}

function cal2(){
    return $GLOBALS['a'] * $GLOBALS['b'] * $GLOBALS['c'];
}
echo cal()."<br>";
echo cal1()."<br>";
echo cal2()."<br>";
