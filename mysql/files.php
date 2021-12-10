<?php

$findWord1 = ('donec');
$findWord2 = ('dolor');
$text = file_get_contents('text.txt');
$textArray = explode('. ', $text);
foreach ($textArray as $value){
    $sent = strtolower($value);
    $hav = strpos($sent, $findWord1);
    $hav = strpos($sent, $findWord2);
        if ( is_int($hav) == true ){
            $newText []= $value;
        }
}
$newText1 = implode('. ', $newText);
echo $newText1;
