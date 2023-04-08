
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
<?php
if(isset($_POST['valider'])){
    extract($_POST);
    $conn = mysqli_connect("localhost","root","","form");
    $req = mysqli_query($conn,"INSERT INTO utilisateurs VALUES(NULL,'$nom','$email','$mdp')");
    if($req){
        header('location: authentification.php');
    }
}
?>
<div class="compte_content">
<section>
       <h1> Cree une Compte</h1>
       <?php 
       if(isset($erreur)){
           echo "<p class= 'Erreur'>".$erreur."</p>"  ;
       }
       ?>
       <form action="cree_compte.php" method="POST"> 
           <label>NOM</label>
           <input type="text" name="nom" id="nom">
           <label>Email</label>
           <input type="text" name="email" id="email">
           <label >Mot de Passe</label>
           <input type="password" name="mdp" id="mdp">
           <label >repeter Mot de Passe</label>
           <input type="password" name="Rmdp" id="rmdp">
           <input type="submit" value="valider" name="valider" onclick="cree_compte()">
           <p>Déjà inscrit ?<a href="authentification.php" class="inscrire">Connexion</a></p>
       </form>
   </section> 
</div>
            <script src="script.js" ></script>
</body>
</html>
