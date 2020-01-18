<?php

//Interger
$a = 300;

//Floating Number
$f = 0.30;

//String
$s = "This is a string with double quote";
$x = 'This is a string with single quote';

//Boolean
$b = true;
$c = false;

//Array (PHP before 5.4)
$array = array(
    "a", "b", "c"
);

//Array (PHP after 5.4)
$array = ["a", "b", "c"];


//Indexed Array
$index_array = ["a", "b", "c"];
$target = $index_array[2]; //c
$index_array[1] = "v" //Changing b to v

//Associative Array (Key pair values, suitable for expressing/describing one object Eg. Car)
$aaray = [
    "peter" => 35,
    "ali" => 23,
    "michael" =>20
];


//Multidimensional array
$mdarray = [
    ["name" => "Ali", "age" =>20],
    ["name" => "Muthu", "age" =>20],
    ["name" => "Akau", "age" =>20],
];


//Operator
//Use . to concatenate string, Use + to add numbers

print_r($array); //To print array out (Echo cant print array)
var_dump($array);


//Date --------------------time here used to get the date of next day
echo date("Y-m-d H:i:s", time()+24*3600);

//unix timestamp
echo time();

//PHP Object
class Person {};
$p = new Person(); //To get the data within the class
?>