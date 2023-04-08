<?php 
   session_start() ;
  if(isset($_POST['boutton-valider'])){ 
    if(empty($_POST["nom"]) || empty($_POST["mdp"]) ) {
        $erreur = "Veuillez remplir tous les champs obligatoires";
    } else {
        $nom = $_POST['nom'] ;
        $mdp = $_POST['mdp'] ;
        $erreur = "" ;
        $nom_serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe ="";
        $nom_base_données ="form" ;
        $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        $req = mysqli_query($con , "SELECT * FROM utilisateurs WHERE nom = '$nom' AND mdp ='$mdp' ") ;
        $num_ligne = mysqli_num_rows($req) ;
        if($num_ligne > 0){
            header("Location:bienvenu.php") ;
            $_SESSION['nom'] = $nom ;
            $_SESSION["autoriser"]="oui";
        }else {
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
        }    
    }
  }
    function test_input($valeur){
    $valeur=htmlentities(htmlspecialchars(stripslashes(trim($valeur))));
    return $valeur;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="autent_content">
    <section>
       <h1> Connexion</h1>
       <?php 
       if(isset($erreur)){
           echo "<p class= 'Erreur'>".$erreur."</p>"  ;
       }
       ?>
       <form action="" method="POST">
           <label>NOM</label>
           <input type="text" id="nom" name="nom">
           <label >Mot de Passe</label>
           <input type="password" id="password" name="mdp">
           <input type="submit" value="Valider" name="boutton-valider" onclick="mafonction()">
           <p>Non enregistré ?<a href="cree_compte.php" class="inscrire">S'inscrire</a></p>
       </form>
   </section> 
    </div>
    <script src="script.js" ></script>
</body>
</html>