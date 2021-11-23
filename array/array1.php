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
$l=$max_key - $min_key;

$na = array_slice($a,$min_key,$l);
$res = array_product($na);
