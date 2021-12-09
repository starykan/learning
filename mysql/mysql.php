<?php

$conn = new PDO('mysql:host=localhost;dbname=Learn', 'root', '123');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = $conn->prepare('SELECT * FROM new_table');
$query->execute();
$data = $query->fetchAll(\PDO::FETCH_ASSOC);


$all = 9;
$lim = 3;
$prev = 1;
$curr_link = $_GET['page']??1;
$link = "mysql.php";

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

foreach ($data as $key => $value){ if ($key == ($curr_link - 1)) $showData = implode("<br>", $value);}
echo $showData.'<br>';

pagination($all, $lim, $prev, $curr_link, $link);