<?php
$a = [[1,2,4],
      [5,4,9],
      [2,0,2]];

$rowCount = count($a);
$colCount = count($a[0]);
for($j=0; $j < $colCount; $j++) {
    $s = 1;
    for ($i=0; $i < $rowCount; $i++){
        $s *= $a[$i][$j];
    }
    if ($s == 0){ unset($s);}
    else echo $s, '<br>';
}