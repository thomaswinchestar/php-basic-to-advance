<?php
// &&(and) ||(0r)

$time = date_default_timezone_set("Asia/Yangon");
$time = date('H:i:s');
if($time >= 6 and $time <= 10){
    echo "$time Good Morning";
}elseif($time >= 12 and $time <= 15){
    echo "$time Good AfterNoon";
}else{
    echo "$time Good Evening";
}
echo "<hr>";

$likeFruit = 'apple';
switch($likeFruit){
    case 'mango':
        echo 'you like mango';
        break;
        case 'apple':
        echo 'you like apple';
        break;
        default:
        echo 'there is no fruits';
        break;
}