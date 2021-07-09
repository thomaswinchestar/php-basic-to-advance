<?php
//for
//while
//do while
//foreach

#for loop
//start point, end point(condition), increment or decrement
// for($i=1; $i<=10; $i++){
//     echo $i . "<br>";
// }
#for loop in array
// $arr = ['a','b','c'];
// $arrLength = count($arr);
// for($i=0; $i<$arrLength; $i++){
//     echo $arr[$i];
// }

#while loop
// $i = 10;
// while($i>=1){
//     echo $i . "<br>";//
//     $i--; //increment,decrement
// }

#do while loop
// $i = 1;
// do{
//     echo $i . "<br>";
//     $i++;
// }while($i<=10);

#foreach
#foreach loop in index array
// $arr = ['a','b','c'];
// foreach($arr as $a){
//     echo $a;
// }

#foreach loop in associative array
$arr = [
    'a' => 'A',
    'b' => 'B',
    'c' => 'C'
];

foreach($arr as $k => $v){
    echo "<pre>";
    echo $k . ' ' . $v;
}