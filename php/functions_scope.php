<?php
$hello = 'hello';
function showName($name = 'default'){
    global $hello;
   echo $name;
   echo $hello;
   $n = 'some';
   echo $n;
}

showName('str');