<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container_joueur_a">
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($Numero) && isset($Nom) && isset($IdEquipe) && isset($Poste) && isset($Nationalite) && isset($Salaire)){
                include_once "connexion.php";
                $req = mysqli_query($con , "INSERT INTO joueur VALUES('$Numero', '$Nom', '$IdEquipe','$Poste','$Nationalite','$Salaire')");
                if($req){
                    header("location: les_joueurs.php");
                }else {
                    $message = "joueur non ajouté";
                }

           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="les_joueurs.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2 class="title_joueur">Ajouter un joueur</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Numero</label>
            <input type="number" name="Numero" >
            <label>Nom</label>
            <input type="text" name="Nom" >
            <label>IdEquipe</label>
            <input type="number" name="IdEquipe" >
            <label>Poste</label>
            <input type="text" name="Poste" >
            <label>Nationalite</label>
            <input type="text" name="Nationalite" >
            <label>Salaire</label>
            <input type="number" name="Salaire" >
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</div>
</body>
</html>