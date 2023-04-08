<?php
  include_once "connexion.php";
  $ID= $_GET['ID'];
  $req = mysqli_query($con , "DELETE FROM equipe WHERE ID = $ID");
  header("Location:les_equipes.php")
?>