<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }
        td{
            border: 1px solid black;
            width: 40px;
        }
    </style>
        </head>
<body>
<?php
$w=0;
$q=255/9;
echo '<table>';
for($i=1; $i<=10; $i++) {
    $w = ($i-1) * $q;
    floor($w);
    echo ' <tr style="background-color: rgb('.$w.','.$w.','.$w.')">';
    echo '<td>'.$i.'</td>';
    echo '<td>'.mt_rand(0,100).'</td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>