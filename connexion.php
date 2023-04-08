<?php
  $con = mysqli_connect("localhost","root","","mini_projet");
  if(!$con){
     echo "Vous n'êtes pas connecté à la base de donnée";
  }
?>