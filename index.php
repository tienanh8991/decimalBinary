<?php
include "Convert.php";

$convert = new Convert(100);
$number = 13;

while ($number != 0 ){
    $convert->push($number % 2);
    $number = floor($number / 2);
}
echo "Binary Number : ";
while (!$convert->isEmpty()){
    echo $convert->pop() . " ";
}

