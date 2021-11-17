<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<form method="post">
    <table>
        <tr>
            <td><label for="digit1">Цифра1</label></td>
            <td>
                <input id="digit1" name="digit1">
            </td>
        </tr>
        <tr>
            <td><label for="digit2">Цифра2</label></td>
            <td>
                <input id="digit2" name="digit2">
            </td>
        </tr>
        <tr>
            <td><label for="digit3">Цифра3</label></td>
            <td>
                <input id="digit3" name="digit3">
            </td>
        </tr>
        <tr>
            <td><label for="digit4">Цифра4</label></td>
            <td>
                <input id="digit4" name="digit4">
            </td>
        </tr>

        <tr><td colspan=2><input type="submit" value="Ввод"></td></tr>
    </table>
    <?php
    $digit1=$_POST['digit1'];
    $digit2=$_POST['digit2'];
    $digit3=$_POST['digit3'];
    $digit4=$_POST['digit4'];

    if ($digit1 > $digit2 && $digit1 > $digit3 && $digit1 > $digit4) echo $digit1;
    elseif ($digit2 > $digit1 && $digit2 > $digit3 && $digit2 > $digit4) echo $digit2;
    elseif ($digit3 > $digit1 && $digit3 > $digit2 && $digit3 > $digit4) echo $digit3;
    else echo $digit4;
       ?>
</form>
</body>
</html>
