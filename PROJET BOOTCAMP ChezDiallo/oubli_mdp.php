<?php
   
  
  $mail=$_POST['email'];
       if(isset($_POST['Envoyer'])){
    $mail=$_POST['email']; 
    }
       echo "un message de récupéreation de votre mot de passe vous a été envoyé à l'adresse $mail";  
?>