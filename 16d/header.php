<?php include "config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Rimas</title>
</head>
<body>
    <header>
        <?php
            include "json.menu.php";      
            
            if(isset($_SESSION["first_name"]) && isset($_SESSION["last_name"]) && isset($_SESSION["password"])){
            echo "<br>" . "Ahoy " . $_SESSION["first_name"] ." " . $_SESSION["last_name"];
            }
        ?>
    </header>
</body>
</html>