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
<div class="container_equipes">

    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($NomEquipe) && isset($Pays)){
                include_once "connexion.php";
                $req = mysqli_query($con , "INSERT INTO equipe VALUES(NULL, '$NomEquipe', '$Pays')");
                if($req){
                    header("location: les_equipes.php");
                }else {
                    $message = "equipe non ajouté";
                }

           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form_equipe">
        <a href="les_equipes.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter une equipe</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>NomEquipe</label>
            <input type="text" name="NomEquipe" >
            <label>Pays</label>
            <input type="text" name="Pays" >
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</div>
</body>
</html>