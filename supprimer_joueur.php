<?php
  include_once "connexion.php";
  $Numero= $_GET['Numero'];
  $req = mysqli_query($con , "DELETE FROM joueur WHERE Numero = $Numero");
  header("Location:les_joueurs.php")
?>