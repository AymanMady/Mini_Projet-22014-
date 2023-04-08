<?php 
session_start() ;
if($_SESSION["autoriser"]!="oui"){
    header("location:autentification.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="bienvenu_content">
    <div class="content">
            <?php
             echo "<h1 class='titre'> Bonjour " .  $_SESSION['nom'] . "</h1>";
            ?>
            <h1>Bienvenue a la page d'adminstration</h1>
            <div>
                <button type="button"><span></span><a href="les_equipes.php">Les équipes</a></button>
                <button type="button"><span></span><a href="les_joueurs.php">Les joueurs</a></button>
                <button type="button"><span></span><a href="supprimer_session.php">logout</a></button>
            </div>
        </div>
        <!-- hello world -->
    </div>

</body>
</html>