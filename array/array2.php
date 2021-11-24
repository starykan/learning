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
?>

<?php

$a = [8,7,3,5,9,6,2,4,1];

foreach ($a as $k => $v){
    for ($k=0; $k<9; $k++)
        if(($k % 2) == 0){
            array_push($a);
            }else array_unshift($a);{
         break;
         }
}
print_r($a);




