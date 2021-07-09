<?php
//index array
//associative array
#index array
// $fruits = ['mango', 'orange'];//0
// echo $fruits[0];

#associative array
$userData = [
    'name' => 'Pyei Phyo Htet',
    'age' => 24,
    'isLikeBlack' => true,
    'likeColor' => ['red','green','yellow'],
];

// echo "<pre>";
// var_dump($userData['likeColor']);
// echo "<pre>";
// print_r($userData['likeColor']);

// echo $userData['likeColor'][2];

#Loop through and print all the values of an indexed array:
// $cars = ['Toyota','Mercedes','Ferari'];
// $arrLength = count($cars);
// for($x=0; $x<$arrLength;$x++){
//     echo $cars[$x];
//     echo "<br>";
// }

#Loop through and print all the values of an associative array:
/* $age = [
    'Peter' => 35,
    'Ben' => 23,
    'Joe' => 43,
];
foreach($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
*/

#Create a multidimensional array:
$cars = [
    ["Volvo", 100, 96],
    ["BMW", 60, 59],
    ["Toyota", 110, 100]
];

// echo "<pre>";
// print_r($cars);

echo $cars[0][0] . ": Ordered: ".$cars[0][1]. ". Sold: ". $cars[0][2]. "<br>";
echo $cars[1][0] . ": Ordered: ".$cars[1][1]. ". Sold: ". $cars[1][2]. "<br>";
echo $cars[2][0] . ": Ordered: ".$cars[2][1]. ". Sold: ". $cars[2][2]. "<br>";
