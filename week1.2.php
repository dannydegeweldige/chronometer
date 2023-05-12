<?php

$naam = $_POST["name"];
$email = $_POST["email"];
$achternaam = $_POST["achternaam"]

// met get kan iedereen de url zien en post niet
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post">
        Naam: <input type="text" name="name"><br>
        email: <input type="text" name="email"><br>
        achternaam: <input type="text" name="achternaam"><br>
        <input type="submit" value="Verzenden">
    </form>
</body>
</html>