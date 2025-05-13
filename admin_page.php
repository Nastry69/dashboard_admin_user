<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administrateur</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: #fff;">

    <div class="box">
        <h1>Bienvenue, <span><?= $_SESSION['name'] ?></span></h1>
        <p>Ceci est la page <span>administrateur</span></p>
        <button onclick="window.location.href='logout.php'">Se déconnecter</button>
    </div>

    
</body>
</html>