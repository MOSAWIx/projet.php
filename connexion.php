<?php
  
  $con = mysqli_connect("localhost","root","","entreprise");
  if(!$con){
     echo "Vous n'êtes pas connecté à la base de donnée";
  }
?>