<?php
   include('connect.php');
   $nom=$_POST['nom'];
   $mail=$_POST['Email'];
   $mess=$_POST['message'];
   
  // try{ //
       if(isset($_POST['Envoyer'])){
        $nom=$_POST['nom'];
        $mail=$_POST['Email'];
        $mess=$_POST['message'];
           
       }
      // if ($mdp1 != $mdp2)
      // echo "Les mots de passe sont différents, veuillez saisir des mots de passe identiques...";
      // else { 
       $sql= "INSERT INTO `Contact`(`id`, `Nom`, `Email`, `Message`)VALUES ('',?,?,?)";
       $db->prepare($sql)->execute([$nom,$mail,$mess]);
   echo "Message envoyé";
 //} 
 // catch(\Throwable $e) {
  //  echo "erreur:".$e->getMessage()."<br>";
 //} //
//}
?>