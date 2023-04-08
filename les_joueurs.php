<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Joueur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container_joueur">
        <div>
            <a href="ajouter_joueur.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
            
            <table class="joueur_table">
                <tr id="items">
                    <th>Numero</th>
                    <th>Nom</th>
                    <th>IdEquipe</th>
                    <th>Poste</th>
                    <th>Nationalite</th>
                    <th>Salaire</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <?php 
                    include_once "connexion.php";
                    $req = mysqli_query($con , "SELECT * FROM joueur");
                    if(mysqli_num_rows($req) == 0){
                        echo "Il n'y a pas encore de joueur ajouter !" ;
                        
                    }else {
                        while($row=mysqli_fetch_assoc($req)){
                            ?>
                            <tr>
                                <td><?=$row['Numero']?></td>
                                <td><?=$row['Nom']?></td>
                                <td><?=$row['IdEquipe']?></td>
                                <td><?=$row['Poste']?></td>
                                <td><?=$row['Nationalite']?></td>
                                <td><?=$row['Salaire']?></td>
                                <td><a href="modifier_joueur.php?Numero=<?=$row['Numero']?>"><img src="images/pen.png"></a></td>
                                <td><a href="supprimer_joueur.php?Numero=<?=$row['Numero']?>"><img src="images/trash.png"></a></td>
                            </tr>
                            <?php
                        }

                    }
                ?>
            </table>
        </div>
    </div> 
</body>
</html>