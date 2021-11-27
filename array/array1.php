<?php

$a = [2,1,5,4,3,6];
$max = $a[0];
$min = $a[0];

foreach($a as $k => $v)
{
    if($v > $max)
    {
        $max = $v;
        $max_key = $k;
    }

    if($v < $min)
    {
        $min = $v;
        $min_key = $k;
    }
}
if ($max_key > $min_key){
    $res = array_product(array_slice($a,$min_key,$max_key - $min_key));}
else
    $res = array_product(array_slice($a,$min_key,$min_key - $max_key));