<?php

$data = include 'text.php';

function getContent($data)
{
    $pc = substr_count($data,'. ');
    $wc = str_word_count($data,0,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
    $lc = mb_strlen($data);
    echo 'sentence '.$pc.'</br>';
    echo 'word '.$wc.'</br>';
    echo 'chars '.$lc.'</br>';
}

$all = 30;
$lim = 3;
$prev = 1;
$curr_link = $_GET['page'];
$link = "http://learning.zxc/pagination/functions.php";

function pagination($all, $lim, $prev, $curr_link, $link)
{
    $first=$curr_link-$prev;
    if($first<1) $first=1;
    $last=$curr_link+$prev;
    if($last>ceil($all/$lim))$last=ceil($all/$lim);
    $y=1;
    if($first>1) echo "<a href='{$link}?page={$y}'>1</a> ";
    $y=$first-1;
    if($first>6) {
        echo "<a href='{$link}?page={$y}'>...</a> ";
    }else {
        for($i=2;$i<$first;$i++){
            echo "<a href='{$link}?page={$i}'>$i</a> ";
        }
    }
    for($i=$first;$i<$last+1;$i++){
        if($i==$curr_link){?>
            <span><?=$i?></span>
        <?php }else{
            $alink = "<a href='{$link}";
            if($i != 1) $alink .= "?page={$i}";
            $alink .= "'>$i</a>      ";
            echo $alink;
        }
    }
    $y=$last+1;
    if($last<ceil($all/$lim) && ceil($all/$lim)-$last>2) {
        echo "<a href='{$link}?page={$y}'>...</a> ";
    }
    $e=ceil($all/$lim);
    if($last<ceil($all/$lim)) echo "<a href='{$link}?page={$e}'>$e</a>";
}

function paginationData($data, $curr_link, $lim): string
{
    $arr = explode("\n", $data);
    $currentData = array_slice($arr, (($curr_link - 1) * $lim), $lim);
    return implode("\n", $currentData);
}

function charChange($newData)
{
    return preg_replace('/(задача)/iu', '<span style="color:#ff0000">$1</span>', $newData);
}

function makeFat($newData)
{
    return preg_replace('/[А-Я]/u', '<b>$0</b>', $newData);
}


$newData = paginationData($data, $curr_link, $lim);
$newData = charChange($newData);
$newData = makeFat($newData);
echo($newData);
getContent($newData);
pagination($all, $lim, $prev, $curr_link, $link);

