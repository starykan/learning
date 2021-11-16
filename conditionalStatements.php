<html>
<head>
    <style>
        .red {
            color: red; /* Цвет символа */
        }
    </style>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><label for="digit">Цифра</label></td>
            <td>
                <input id="digit" name="digit">
            </td>
        </tr>
        <tr><td colspan=2><input type="submit" value="Ввод"></td></tr>
    </table>
</form>
<p><span class="letter">L</span></p>
<?php
$digit=$_POST['digit'];
if ($digit>0) echo $digit;
elseif ($digit=0) echo $digit;
else echo $digit;?>
</body>
</html>
