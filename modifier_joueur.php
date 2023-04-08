<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container_joueur_a">
        <?php

        include_once "connexion.php";
        $Numero = $_GET['Numero'];
        $req = mysqli_query($con , "SELECT * FROM joueur WHERE Numero = $Numero");
        $row = mysqli_fetch_assoc($req);


        if(isset($_POST['button'])){ 
        extract($_POST);
        if(isset($Numero) && isset($Nom) && isset($IdEquipe) && isset($Poste) && isset($Nationalite) && isset($Salaire)){
            $req = mysqli_query($con, "UPDATE joueur SET Numero = '$Numero' , Nom = '$Nom' , IdEquipe = '$IdEquipe' , Poste = '$Poste', Nationalite = '$Nationalite', Salaire = '$Salaire' WHERE Numero = $Numero");
            if($req){
                header("location: les_joueurs.php");
            }else {
                $message = "joueur non modifié";
            }

        }else {
            $message = "Veuillez remplir tous les champs !";
        }
        }

        ?>

        <div class="form">
        <a href="les_joueurs.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2 class="title_joueur">Modifier le joueur : <?=$row['Nom']?> </h2>
        <p class="erreur_message">
        <?php 
            if(isset($message)){
                echo $message ;
            }
        ?>
        </p>
        <form action="" method="POST">
        <label>Numero</label>
        <input type="number" name="Numero" value="<?=$row['Numero']?>">
        <label>Nom</label>
        <input type="text" name="Nom" value="<?=$row['Nom']?>">
        <label>IdEquipe</label>
        <input type="number" name="IdEquipe" value="<?=$row['IdEquipe']?>">
        <label>Poste</label>
        <input type="text" name="Poste" value="<?=$row['Poste']?>">
        <label>Nationalite</label>
        <input type="text" name="Nationalite" value="<?=$row['Nationalite']?>">
        <label>Salaire</label>
        <input type="number" name="Salaire" value="<?=$row['Salaire']?>">
        <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</div>

</body>
</html>