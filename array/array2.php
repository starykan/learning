<?php

$a = [1,2,3,4,5,6,7,8,9];
$even = [];
$odd = [];

foreach ($a as $k => $v){

    if(($k % 2) == 0){
        $even[] = [$v];
    }else{
        $odd[] = [$v];
    }
}
$res = array_merge($even, $odd);
