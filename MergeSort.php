<?php
$a = array( 10, 67, 56, 0);
$b = array( 20, 3, 2, 2, 12, 1012);

$res=array_merge($a,$b);

sort($res);
echo "Sorted merged list :";

for ($i = 0; $i < count($res); $i++)
    echo $res[$i] . " ";

?> 
