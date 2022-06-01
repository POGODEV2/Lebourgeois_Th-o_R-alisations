<?php
session_start();

        include("connection.php");
        include("functions.php");

    $user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Amigos - Créer un nouveau compte</title>
</head>
<body>
    Merci et bienvenue !
</body>
</html>