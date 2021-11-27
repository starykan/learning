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
            <td><label for="leghtThing">leghtThing</label></td>
            <td>
                <input id="leghtThing" name="leghtThing">
            </td>
        </tr>
        <tr>
            <td><label for="wightThing">wightThing</label></td>
            <td>
                <input id="wightThing" name="wightThing">
            </td>
        </tr>
        <tr>
            <td><label for="leghtBox">leghtBox</label></td>
            <td>
                <input id="leghtBox" name="leghtBox">
            </td>
        </tr>
        <tr>
            <td><label for="wightBox">wightBox</label></td>
            <td>
                <input id="wightBox" name="wightBox">
            </td>
        </tr>

        <tr><td colspan=2><input type="submit" value="Ввод"></td></tr>
    </table>
<?php

$leghtThing=$_POST['leghtThing'];
$wightThing=$_POST['wightThing'];
$leghtBox=$_POST['leghtBox'];
$wightBox=$_POST['wightBox'];

if ($leghtThing < $leghtBox && $wightThing < $wightBox || $leghtThing < $wightBox && $wightThing < $leghtBox) echo 'Можно';
else echo 'Нельзя';