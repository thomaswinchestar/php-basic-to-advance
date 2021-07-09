<?php
//string function
$str = "str";
echo strlen($str);
echo "<br>";
echo strrev($str);
echo "<br>";

//math function
echo  round(0.55);
echo "<br>";
echo rand(1, 1000000);


//array function
$arr = ['b','a','c'];
echo "<pre>";
sort($arr);
print_r($arr);

echo array_pop($arr);   