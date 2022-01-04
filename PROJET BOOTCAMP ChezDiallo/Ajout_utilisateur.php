<?php
   include('connect.php');
   $nom=$_POST['user_name1'];
   $prenom=$_POST['user_name2'];
   $uti=$_POST['user_name3'];
   $mdp1=$_POST['user_password1'];
   $mdp2=$_POST['user_password2'];
  // try{ //
       if(isset($_POST['Envoyer'])){
           $nom=$_POST['user_name1'];
           $prenom=$_POST['user_name2'];
           $uti=$_POST['user_name3'];
           $mdp1=$_POST['user_password1'];
           $mdp2=$_POST['user_password2'];
           
       }
       if ($mdp1 != $mdp2)
       echo "Les mots de passe sont différents, veuillez saisir des mots de passe identiques...";
       else { 
       $sql= "INSERT INTO `utilisateur`(`id`, `Nom`, `Prenom`, `Nom_utilisateur`,`Mot_de_passe`)VALUES ('',?,?,?,?)";
       $db->prepare($sql)->execute([$nom,$prenom,$uti,$mdp1]);
   echo "Inscription réussie";
 } 
 // catch(\Throwable $e) {
  //  echo "erreur:".$e->getMessage()."<br>";
 //} //
//}
?>